<?php

namespace App\Helpers;

use Spatie\SimpleExcel\SimpleExcelReader;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;

class Timezone
{
    protected null|Collection|LazyCollection $timeZones = null;

    public function __construct()
    {
        $this->timeZones = static::load();
    }

    protected static function load(): Collection|LazyCollection
    {
        $data = cache()
            ->rememberForever(__METHOD__, function () {
                $filePath = database_path('static-data/timezone-list.csv');

                if (!is_file($filePath)) {
                    return collect();
                }

                /**
                 * @var LazyCollection $rows
                 */
                $rows = SimpleExcelReader::create(file: $filePath, type: 'csv')
                    ->useDelimiter(';')
                    // ->trimHeaderRow()
                    ->headersToSnakeCase()
                    ->getRows();

                return $rows?->map(
                    fn ($item) => collect($item)->mapWithKeys(
                        fn ($value, $k) => (object) [trim($k) => trim($value)]
                    )
                )
                        ?->map(function ($item) {
                            $item['gmt_offset_int'] = null;

                            if ($item['gmt_offset'] ?? null) {
                                $item['gmt_offset_int'] = (int) preg_replace('/[^+\-0-9]/', '', $item['gmt_offset'] ?? '');
                            }

                            return $item;
                        })
                        ?->map(fn ($item) => (object) $item?->toArray())?->collect() ?? collect();
            });

        return collect($data);
    }

    public function all(): Collection|LazyCollection
    {
        return $this->timeZones();
    }

    public function timeZones(): Collection|LazyCollection
    {
        return $this->timeZones ?? collect();
    }

    protected function setTimeZones(Collection|LazyCollection $timeZones): static
    {
        $this->timeZones = $timeZones;

        return $this;
    }

    public function filterBy(?string $by = null, ?string $value = null): static
    {
        if ($by && $value) {
            $this->setTimeZones(
                $this->all()->where($by, $value)
            );
        }

        return $this;
    }

    public function functionName()
    {
        // preg_replace('/[^+\-0-9]/', '', 'aa+123')
    }

    public function sortByGmtOffset(bool $descending = false)
    {
        $this->setTimeZones(
            $this->all()->sortBy(fn ($item) => $descending ? -$item->gmt_offset_int : $item->gmt_offset_int)
        );

        return $this;
    }
}
