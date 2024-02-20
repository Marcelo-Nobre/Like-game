<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>WS Chat</title>
        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
        ])

        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div
            class="drawer-content flex flex-col"
            x-data="chatPageData"
        >
            <div class="join join-vertical">
                <div class="navbar bg-blue-900 fixed top-0 pb-2 z-30">
                    <div class="flex-none">
                        <label for="side-menu" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </label>
                    </div>

                    <div class="flex-1">
                        <a class="btn btn-ghost text-xl">WS Chat</a>
                    </div>
                    <div class="flex-none">
                      <button class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                      </button>
                    </div>
                </div>

                <div class="my-5 py-5"></div>
                <div class="my-5 py-5"></div>

                {{-- chat content --}}
                <div class="mb-6 overflow-auto md:overflow-y-scroll px-3">
                    {{-- https://daisyui.com/components/chat/#chat-with-image-header-and-footer --}}

                    <template
                        x-for="(message, messageIndex) in messages"
                        x-key="messageIndex"
                    >
                        <div
                            class="chat"
                            x-bind:class="{
                                'chat-end': message?.author?.id == myId,
                                'chat-start': message?.author?.id != myId,
                            }"
                            x-bind:data-author-id="message.author?.name"
                        >
                            <div class="chat-image avatar">
                            <div class="w-10 rounded-full">
                                <img
                                    x-bind:alt="message.author?.name"
                                    x-bind:src="message.author?.image"
                                />
                            </div>
                            </div>
                            <div class="chat-header">
                                <span x-text="message.author?.name"></span>
                                <time
                                    class="text-xs opacity-50 tooltip"
                                    x-text="formatedMessageDate(message)"
                                    x-bind:data-tip="formatedMessageDateTooltip(message, false)"
                                    -x-tooltip.delay.500-0.html="formatedMessageDateTooltip(message)"
                                ></time>
                            </div>
                            <div
                                class="chat-bubble"
                                x-html="formatedMessageContent(message)"
                            ></div>
                            <div class="chat-footer opacity-50">
                                <!-- Seen at 12:46 -->
                            </div>
                        </div>
                    </template>
                </div>

                <div class="my-5 py-5">
                    <div class="my-5 py-5"></div>
                </div>

                <div class="join join-vertical">
                    <!-- lg -->
                    <textarea
                        placeholder="Type your message and press CTRL+ENTER"
                        x-on:keyup.ctrl.enter="sendMessage"
                        x-model="textareaContent"
                        class="textarea textarea-bordered textarea-lg bg-gray-600 w-full mt-1 fixed bottom-0"
                    ></textarea>
                </div>
            </div>

            <div class="drawer drawer-end fixed top-2 w-24 right-4 z-50">
                <input id="my-contacts" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <!-- Page content here -->
                    <label for="my-contacts" class="btn btn-primary drawer-button">Contacts</label>
                </div>
                <div class="drawer-side">
                    <label for="my-contacts" aria-label="close sidebar" class="drawer-overlay"></label>
                    <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                        <!-- Sidebar content here -->
                        <li><a>User 1</a></li>
                        <li><a>User 2</a></li>
                    </ul>
                </div>
            </div>

            <div class="drawer fixed bottom-24 w-24 right-24 z-40">
                <input id="side-menu" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <!-- Page content here -->
                    {{-- <label for="side-menu" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </label> --}}
                </div>
                <div class="drawer-side">
                    <label for="side-menu" aria-label="close sidebar" class="drawer-overlay"></label>
                    <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                        <!-- Sidebar content here -->
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                        <li><label for="my-contacts">Contacts</label></li>
                    </ul>
                </div>
            </div>
        </div>

        <script defer async>
            window.roomId = '{{ $room }}';

            if (!window.roomId) {
                alert('Erro! Room inválida!');
            }

            document.addEventListener('DOMContentLoaded', (event) => {
                // window.Echo.channel(`room.${window.roomId}`)
                //     .listen('MessageSent', (e) => {
                //         console.log(JSON.stringify(e, null, 4) + `\n`);
                //     });
            });

            document.addEventListener('alpine:init', () => {
                if (!window.Alpine) {
                    return;
                }

                Alpine.data('chatPageData', () => ({
                    myId: null,
                    myName: null,
                    myImage: null,
                    myTimeZone: null,
                    messages: [
                        // {
                        //     author: {
                        //         id: 'pedro',
                        //         name: 'Pedro',
                        //         image: 'https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg',
                        //     },
                        //     time: '2024-02-20T15:45:15-03:00',
                        //     content: `Algum conteudo <strong>incrível</strong> aqui.`
                        // },
                        // {
                        //     author: {
                        //         id: 'pedro',
                        //         name: 'Pedro',
                        //         image: 'https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg',
                        //     },
                        //     time: '2024-02-20T15:46:16-03:00',
                        //     content: `Algum conteudo <strong>incrível</strong> aqui.`
                        // },
                        // {
                        //     author: {
                        //         id: 'pedro',
                        //         name: 'Pedro',
                        //         image: 'https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg',
                        //     },
                        //     time: '2024-02-20T15:47:17-03:00',
                        //     content: `Algum conteudo <strong>incrível</strong> aqui.`
                        // },
                        // {
                        //     author: {
                        //         id: 'pedro',
                        //         name: 'Pedro',
                        //         image: 'https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg',
                        //     },
                        //     time: '2024-02-20T15:48:18-03:00',
                        //     content: `Algum conteudo <strong>incrível</strong> aqui.`
                        // },
                        // {
                        //     author: {
                        //         id: 'tiago',
                        //         name: 'Tiago',
                        //         image: 'https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg',
                        //     },
                        //     time: '2024-02-20T15:52:12-03:00',
                        //     content: `Algum conteudo <strong>incrível</strong> aqui.`
                        // },
                    ],
                    textareaContent: '',
                    openContactList: false,
                    init() {
                        this.myId = '{{ $sessionUser?->id ?? null }}';
                        this.myName = '{{ $sessionUser?->name ?? null }}';
                        this.myImage = '{{ $sessionUser?->image ?? null }}';
                        this.myTimeZone = '{{ $sessionUser?->time_zone ?? null }}';
                        this.myTimeZone = this.myTimeZone ? this.myTimeZone : 'America/Sao_Paulo';
                        this.messages = @js($messages) || [];

                        document.addEventListener('DOMContentLoaded', (event) => {
                            window.Echo.channel(`room.${window.roomId}`)
                                .listen('MessageSent', (e) => {
                                    console.log('MessageSent', e);
                                    this.pushMessage(e);
                                });
                        });
                    },
                    toggleOpenContactList() {
                        this.openContactList = ! this.openContactList
                    },
                    formatDate(dataISO, timeZoneToShow = null) { // ('2024-02-20T01:47:24-03:00', 'America/Sao_Paulo')
                        const data = new Date(dataISO);
                        timeZoneToShow = timeZoneToShow || this.myTimeZone;
                        return data.toLocaleString("pt-BR", {timeZone: timeZoneToShow});
                    },
                    formatedMessageDate(message) {
                        if (!message?.time) {
                            return '';
                        }

                        return this.formatDate(message?.time, this.myTimeZone);
                    },
                    formatedMessageDateTooltip(message, html = true) {
                        if (!message) {
                            return '';
                        }

                        let formatedDate = this.formatedMessageDate(message);

                        // <span>${formatedDate}</span>
                        return html ? '<div class="chat chat-end"><div class="chat-bubble chat-bubble-info">Calm down, Anakin.</div></div>'
                        : formatedDate;
                    },
                    formatedMessageContent(message) {
                        if (!message?.content) {
                            return '';
                        }

                        // TODO: convert markdown, etc

                        return message?.content;
                    },
                    pushMessage(contentData) {
                        if (!contentData || (typeof contentData) != 'object' || Array.isArray(contentData)) {
                            return;
                        }

                        if (! ('data' in contentData)) {
                            return;
                        }

                        let {data, room} = contentData;

                        if (!data || room != window.roomId) {
                            return;
                        }

                        let {
                            author,
                            time,
                            content,
                        } = data;

                        if (!author || !time || !content ) {
                            console.log('Invalida data:', {
                                author,
                                time,
                                content,
                            });

                            return;
                        }

                        this.messages.push(data);
                    },
                    async sendMessage() {
                        if (!this.textareaContent ) {
                            console.log('Empty "textareaContent"');
                            return;
                        }

                        await fetch("{{ route('send.message') }}", {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content'),
                                'Content-Type': 'application/json',
                                'accept': 'application/json',
                            },
                            body: JSON.stringify({
                                room: window.roomId,
                                message: this.textareaContent,
                            })
                        });

                        this.textareaContent = '';
                    },
                }))
            })
        </script>
    </body>
</html>
