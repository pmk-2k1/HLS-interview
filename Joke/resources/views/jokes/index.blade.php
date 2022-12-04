@extends('layouts.app')

@section('content')
    <div id="main">
        <div class="div_title">
            <p class="content_title">A joke a day keeps the docter away</p>
            <p class="content_title1">if you joke wrong way, your teeth have to pay. (Serious)</p>
        </div>

        @foreach ($jokes as $joke)
            @if ($joke->funny == 0 || $joke->not_funny == 0)
                <div class="div_content ani">
                    <p class="content">{{ $joke->content }}</p>
                </div>
            @endif
        @endforeach

        <div class="form_vote">
            <hr>

            <button type="button" onclick="plusDivs(1)" class="funny">This is Funny!</button>
            <button type="button" onclick="plusDivs(1)" class="not_funny">This is not funny.</button>

        </div>
    </div>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs((slideIndex += n));
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("div_content");
            if (n > x.length) {
                slideIndex = x.length;
                alert("That's all the jokes for today! Come back another day!");
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>
@endsection
