@props([
    'class' => null,
])

@php
    $classes = implode(' ', array_filter([$class ?? null]));
@endphp

{{-- <svg
    {{ $attributes->merge(['class' => $classes]) }}
    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#009246"
>
    <path d="M0 0h512v512H0z"></path>
    <path fill="#ffce00"
        d="M256 102L20 256l236 154 236-154-236-154zm0 54a100 100 0 0 1 100 100 100 100 0 0 1-.504 10.014c-48.123-36.173-110.506-57.542-168.914-56.409-6.632.13-13.207.566-19.709 1.286A100 100 0 0 1 256 156zm-65.568 71.73c55.59.133 116.403 22.059 161.045 57.979A100 100 0 0 1 256 356a100 100 0 0 1-100-100 100 100 0 0 1 3.545-25.943c10.012-1.593 20.354-2.352 30.887-2.327z">
    </path>
</svg> --}}

<?xml version="1.0" encoding="UTF-8"?>
<svg
    {{ $attributes->merge(['class' => $classes]) }}
    version="1.1"
    viewBox="-2100 -1470 4200 2940"
    xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <g id="G">
            <clipPath id="gcut">
                <path d="m-31.5 0v-70h63v70zm31.5-47v12h31.5v-12z" />
            </clipPath>
            <use width="100%" height="100%" clip-path="url(#gcut)" xlink:href="#O" />
            <path d="M5-35H31.5V-25H5z" />
            <path d="m21.5-35h10v35h-10z" />
        </g>
        <g id="R">
            <use width="100%" height="100%" xlink:href="#P" />
            <path d="m28 0c0-10 0-32-15-32h-19c22 0 22 22 22 32" />
        </g>
        <g id="star" fill="#fff">
            <g id="c">
                <path id="t" transform="rotate(18,0,-1)" d="m0-1v1h0.5" />
                <use transform="scale(-1,1)" width="100%" height="100%" xlink:href="#t" />
            </g>
            <use transform="rotate(72)" width="100%" height="100%" xlink:href="#c" />
            <use transform="rotate(-72)" width="100%" height="100%" xlink:href="#c" />
            <use transform="rotate(144)" width="100%" height="100%" xlink:href="#c" />
            <use transform="rotate(216)" width="100%" height="100%" xlink:href="#c" />
        </g>
        <g id="star1">
            <use transform="scale(31.5)" width="100%" height="100%" xlink:href="#star" />
        </g>
        <g id="star2">
            <use transform="scale(26.25)" width="100%" height="100%" xlink:href="#star" />
        </g>
        <g id="star3">
            <use transform="scale(21)" width="100%" height="100%" xlink:href="#star" />
        </g>
        <g id="star4">
            <use transform="scale(15)" width="100%" height="100%" xlink:href="#star" />
        </g>
        <g id="star5">
            <use transform="scale(10.5)" width="100%" height="100%" xlink:href="#star" />
        </g>
        <path id="D"
            d="m-31.5 0h33a30 30 0 0 0 30-30v-10a30 30 0 0 0-30-30h-33zm13-13h19a19 19 0 0 0 19-19v-6a19 19 0 0 0-19-19h-19z"
            fill-rule="evenodd" />
        <path id="E" transform="translate(-31.5)" d="m0 0h63v-13h-51v-18h40v-12h-40v-14h48v-13h-60z" />
        <path id="e" d="m-26.25 0h52.5v-12h-40.5v-16h33v-12h-33v-11h39.25v-12h-51.25z" />
        <path id="M" d="m-31.5 0h12v-48l14 48h11l14-48v48h12v-70h-17.5l-14 48-14-48h-17.5z" />
        <path id="O" d="m0 0a31.5 35 0 0 0 0-70 31.5 35 0 0 0 0 70m0-13a18.5 22 0 0 0 0-44 18.5 22 0 0 0 0 44"
            fill-rule="evenodd" />
        <path id="P" d="m-31.5 0h13v-26h28a22 22 0 0 0 0-44h-40zm13-39h27a9 9 0 0 0 0-18h-27z" fill-rule="evenodd" />
        <path id="S"
            d="m-15.75-22c0 7 6.75 10.5 16.75 10.5s14.74-3.25 14.75-7.75c0-14.25-46.75-5.25-46.5-30.25 0.25-21.5 24.75-20.5 33.75-20.5s26 4 25.75 21.25h-15.25c0-7.5-7-10.25-15-10.25-7.75 0-13.25 1.25-13.25 8.5-0.25 11.75 46.25 4 46.25 28.75 0 18.25-18 21.75-31.5 21.75-11.5 0-31.55-4.5-31.5-22z" />
    </defs>
    <clipPath id="band">
        <circle r="735" />
    </clipPath>
    <path d="m-2100-1470h4200v2940h-4200z" fill="#009b3a" />
    <path d="M -1743,0 0,1113 1743,0 0,-1113 Z" fill="#fedf00" />
    <circle r="735" fill="#002776" />
    <path d="m-2205 1470a1785 1785 0 0 1 3570 0h-105a1680 1680 0 1 0-3360 0z" clip-path="url(#band)" fill="#fff" />
    <g transform="translate(-420,1470)" fill="#009b3a">
        <use transform="rotate(-7)" y="-1697.5" width="100%" height="100%" xlink:href="#O" />
        <use transform="rotate(-4)" y="-1697.5" width="100%" height="100%" xlink:href="#R" />
        <use transform="rotate(-1)" y="-1697.5" width="100%" height="100%" xlink:href="#D" />
        <use transform="rotate(2)" y="-1697.5" width="100%" height="100%" xlink:href="#E" />
        <use transform="rotate(5)" y="-1697.5" width="100%" height="100%" xlink:href="#M" />
        <use transform="rotate(9.75)" y="-1697.5" width="100%" height="100%" xlink:href="#e" />
        <use transform="rotate(14.5)" y="-1697.5" width="100%" height="100%" xlink:href="#P" />
        <use transform="rotate(17.5)" y="-1697.5" width="100%" height="100%" xlink:href="#R" />
        <use transform="rotate(20.5)" y="-1697.5" width="100%" height="100%" xlink:href="#O" />
        <use transform="rotate(23.5)" y="-1697.5" width="100%" height="100%" xlink:href="#G" />
        <use transform="rotate(26.5)" y="-1697.5" width="100%" height="100%" xlink:href="#R" />
        <use transform="rotate(29.5)" y="-1697.5" width="100%" height="100%" xlink:href="#E" />
        <use transform="rotate(32.5)" y="-1697.5" width="100%" height="100%" xlink:href="#S" />
        <use transform="rotate(35.5)" y="-1697.5" width="100%" height="100%" xlink:href="#S" />
        <use transform="rotate(38.5)" y="-1697.5" width="100%" height="100%" xlink:href="#O" />
    </g>
    <use id="1Mi" x="-600" y="-132" width="100%" height="100%" xlink:href="#star1" />
    <use id="2Ma" x="-535" y="177" width="100%" height="100%" xlink:href="#star1" />
    <use id="3Ma" x="-625" y="243" width="100%" height="100%" xlink:href="#star2" />
    <use id="4Ma" x="-463" y="132" width="100%" height="100%" xlink:href="#star4" />
    <use id="5Ma" x="-382" y="250" width="100%" height="100%" xlink:href="#star2" />
    <use id="6Ma" x="-404" y="323" width="100%" height="100%" xlink:href="#star3" />
    <use id="7ir" x="228" y="-228" width="100%" height="100%" xlink:href="#star1" />
    <use id="8co" x="515" y="258" width="100%" height="100%" xlink:href="#star1" />
    <use id="9co" x="617" y="265" width="100%" height="100%" xlink:href="#star3" />
    <use id="10co" x="545" y="323" width="100%" height="100%" xlink:href="#star2" />
    <use id="11co" x="368" y="477" width="100%" height="100%" xlink:href="#star2" />
    <use id="12co" x="367" y="551" width="100%" height="100%" xlink:href="#star3" />
    <use id="13co" x="441" y="419" width="100%" height="100%" xlink:href="#star3" />
    <use id="14co" x="500" y="382" width="100%" height="100%" xlink:href="#star2" />
    <use id="15co" x="365" y="405" width="100%" height="100%" xlink:href="#star3" />
    <use id="16ya" x="-280" y="30" width="100%" height="100%" xlink:href="#star2" />
    <use id="17ya" x="200" y="-37" width="100%" height="100%" xlink:href="#star3" />
    <use id="18ru" y="330" width="100%" height="100%" xlink:href="#star1" />
    <use id="19ru" x="85" y="184" width="100%" height="100%" xlink:href="#star2" />
    <use id="20ru" y="118" width="100%" height="100%" xlink:href="#star2" />
    <use id="21ru" x="-74" y="184" width="100%" height="100%" xlink:href="#star3" />
    <use id="22ru" x="-37" y="235" width="100%" height="100%" xlink:href="#star4" />
    <use id="23rA" x="220" y="495" width="100%" height="100%" xlink:href="#star2" />
    <use id="24rA" x="283" y="430" width="100%" height="100%" xlink:href="#star3" />
    <use id="25rA" x="162" y="412" width="100%" height="100%" xlink:href="#star3" />
    <use id="26ar" x="-295" y="390" width="100%" height="100%" xlink:href="#star1" />
    <use id="27ct" y="575" width="100%" height="100%" xlink:href="#star5" />
</svg>
