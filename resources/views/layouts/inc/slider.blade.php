<div class="boots-container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="bootsitem active">
                <img src="{{ asset('assets/images/wall0.jpg/') }}" width="1920" height="1080" alt="wall0">
            </div>

            <div class="bootsitem">
                <img src="{{ asset('assets/images/wall1.jpg/') }}" width="1920" height="1080" alt="wall1">
            </div>

            <div class="bootsitem">
                <img src="{{ asset('assets/images/wall2.jpg/') }}" width="1920" height="1080" alt="wall1">
            </div>

            <div class="bootsitem">
                <img src="{{ asset('assets/images/wall3.jpg/') }}"  width="1920" height="1080" alt="wall2">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
