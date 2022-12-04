@extends('layouts.app')

@section('content')
    <div id="main">
        <div class="div_title">
            <p class="content_title">A joke a day keeps the docter away</p>
            <p class="content_title1">if you joke wrong way, your teeth have to pay. (Serious)</p>
        </div>

        

        <div class="div_content ani">
            <p class="content"></p>
            <p class="content">A child asked his father, "How were people born?" So his father said, "Adam and Eve made
                babies, then their babies became adults and made babies, and so on."<br>The child then went to his mother,
                asked her the same question and she told him, "We were monkeys then we evolved to become like we are
                now."<br>The child ran back to his father and said, "You lied to me!" His father replied, "No, your mom was
                talking about her side of the family."</p>
        </div>
        <div class="div_content ani">
            <p class="content">Teacher: "Kids,what does the chicken give you?" Student: "Meat!" Teacher: "Very good! Now what
                does the pig give you?" Student: "Bacon!"<br> Teacher: "Great! And what does the fat cow give you?" Student:
                "Homework!"</p>
        </div>
        <div class="div_content ani">
            <p class="content">The teacher asked Jimmy, "Why is your cat at school today Jimmy?" Jimmy replied crying,
                "Because I heard my daddy tell my mommy, 'I am going to eat that pussy once Jimmy leaves for school
                today!'""</p>
        </div>
        <div class="div_content ani">
            <p class="content">A housewife, an accountant and a lawyer were asked "How much is 2+2?" The housewife replies:
                "Four!". The accountant says: "I think it's either 3 or 4. Let me run those figures through my spreadsheet
                one more time." The lawyer pulls the drapes, dims the lights and asks in a hushed voice, "How much do you
                want it to be?"</p>
        </div>



        <div class="form_vote">
            <hr>
            {{-- <a href="#" class="next" onclick="plusSlides(1)">This is Funny!</a>
            <a class="next" onclick="plusSlides(1)">This is not Funny!</a> --}}
            {{-- <form class="funny" action=""> --}}
            <button type="button" onclick="plusDivs(1)" class="funny">This is Funny!</button>
            {{-- </form> --}}
            {{-- <form class="not_funny" action=""> --}}
            <button type="button" onclick="plusDivs(1)" class="not_funny">This is not funny.</button>
            {{-- </form> --}}
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
