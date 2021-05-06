<html>
<head>
    <title>Simple Example</title>
    <link
        rel="stylesheet"
        type="text/css"
        href="{{asset('/css/fullpage/full-page-scroll.min.css')}}"
    />
</head>
<body>
<div id="main" class="scroll-container">
    <section style="background-color:#DCADAD">Section 1</section>
    <section style="background-color:#555594">Section 2</section>
    <section style="background-color:#5992AD">Section 3</section>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="{{asset('/js/fullpage/full-page-scroll.min.js')}}"></script>
<script type="text/javascript">
    fullScroll = new fullScroll({
        mainElement: "main",
        displayDots: true,
        dotsPosition: "left",
        animateTime: 0.7,
        animateFunction: "ease",
        onLeave : function (currentPosition){
            if(currentPosition==1||currentPosition==2){
                console.log(currentPosition);
            }
        }
    });
</script>
</body>
</html>
