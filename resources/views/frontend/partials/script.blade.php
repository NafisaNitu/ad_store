<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

<script src ="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
<script src="{{ asset('frontend/assets/js/vendors.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="js/main.js"></script>


<script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "240px";
      document.getElementById("main").style.marginLeft = "5px";
    }
    
    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
    </script>

<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if (this.scrollY > 10) {
                $('.sidebar').addClass("sticky");
            } else {
                $('.sidebar').removeClass("sticky");
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if (this.scrollY > 10) {
                $('.sidebar-r').addClass("sticky");
            } else {
                $('.sidebar-r').removeClass("sticky");
            }
        });
    });
</script>




{{-- <script>
    var getWidth = $( window).width();
    
    if(getWidth <= 768){
        $("#mobileScreen").addClass("d-block");
        $("#pcscreen").addClass("d-none");
      }else{
        $("#mobileScreen").addClass("d-none");
        $("#pcscreen").addClass("d-block");
      }
</script> --}}











<!-- For Sale Section -->
<script>
    $(document).ready (function () {
      $(".content").slice(0, 4).show();
      $("#loadMore").on("click", function(e){
        e.preventDefault();
        $(".content:hidden").slice(0, 4).slideDown();
        if ($(".content:hidden").length == 0) {
          $("#loadMore").text("No Content").addClass("noContent");
        }
      });
      })
</script>
<!-- For Buy Section -->
 <script>
    $(document).ready (function () {
      $(".contentBuy").slice(0, 4).show();
      $("#loadMoreBuy").on("click", function(e){
        e.preventDefault();
        $(".contentBuy:hidden").slice(0, 4).slideDown();
        if ($(".contentBuy:hidden").length == 0) {
          $("#loadMoreBuy").text("No Content").addClass("noContent");
        }
      });
      })
</script>

 <!-- For Rent Section -->
 <script>
    $(document).ready (function () {
      $(".contentRent").slice(0, 4).show();
      $("#loadMoreRent").on("click", function(e){
        e.preventDefault();
        $(".contentRent:hidden").slice(0, 4).slideDown();
        if ($(".contentRent:hidden").length == 0) {
          $("#loadMoreRent").text("No Content").addClass("noContent");
        }
      });
      })
</script>

<script>
    $('#search').on('keyup', function() {
        search();
    });

    $('#search').on('focus', function() {
        search();
    });

    function search() {
        var searchKey = $('#search').val();
        if (searchKey.length > 0) {
            $('body').addClass("typed-search-box-shown");

            $('.typed-search-box').removeClass('d-none');
            $('.search-preloader').removeClass('d-none');
            $.post('https://sobkisubazar.com/ajax-search', {
                _token: AIZ.data.csrf,
                search: searchKey
            }, function(data) {
                if (data == '0') {
                    // $('.typed-search-box').addClass('d-none');
                    $('#search-content').html(null);
                    $('.typed-search-box .search-nothing').removeClass('d-none').html(
                        'Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                    $('.search-preloader').addClass('d-none');

                } else {
                    $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                    $('#search-content').html(data);
                    $('.search-preloader').addClass('d-none');
                }
            });
        } else {
            $('.typed-search-box').addClass('d-none');
            $('body').removeClass("typed-search-box-shown");
        }
    }

</script>

<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    /* When the user scrolls down 20px from the top of the document, show the button */
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        // document.body.scrollTop = 0 ;
        // document.documentElement.scrollTop = 0;
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

<script>
    $(document).ready(function(){

if($('.bbb_viewed_slider').length)
{
    var viewedSlider = $('.bbb_viewed_slider');

    viewedSlider.owlCarousel(
        {
            
        loop:true,
        margin:30,
        autoplay:true,
        autoplayTimeout:1500,
        nav:false,
        dots:false,
        responsive:
            {
                    // 0:{items:1},
                    // 575:{items:3},
                    // 767:{items:3},
                    // 768:{items:4},
                    // 992:{items:4},
                    // 1025:{items:5}

                    0:{items:1},
                    575:{items:3},
                    767:{items:3},
                    768:{items:4},
                    992:{items:4},
                    1370:{items:5}
                }
        });

    if($('.bbb_viewed_prev').length)
    {
        var prev = $('.bbb_viewed_prev');
        prev.on('click', function()
        {
            viewedSlider.trigger('prev.owl.carousel');
        });
    }

    if($('.bbb_viewed_next').length)
    {
        var next = $('.bbb_viewed_next');
        next.on('click', function()
        {
            viewedSlider.trigger('next.owl.carousel');
        });
    }
}


});
</script>

<script>
$(document).ready(function(){

if($('.bbb_viewed_slider_2').length)
{
var viewedSlider = $('.bbb_viewed_slider_2');

viewedSlider.owlCarousel(
    {
        loop:true,
        margin:30,
        autoplay:true,
        autoplayTimeout:2000,
        nav:false,
        dots:false,
        responsive:
            {

                    0:{items:1},
                    575:{items:3},
                    767:{items:3},
                    768:{items:4},
                    992:{items:4},
                    1370:{items:5}

                    // 0:{items:1},
                    // 575:{items:2},
                    // 768:{items:3},
                    // 991:{items:3},
                    // 1199:{items:5}
            }
    });

if($('.bbb_viewed_prev').length)
{
    var prev = $('.bbb_viewed_prev');
    prev.on('click', function()
    {
        viewedSlider.trigger('prev.owl.carousel');
    });
}

if($('.bbb_viewed_next').length)
{
    var next = $('.bbb_viewed_next');
    next.on('click', function()
    {
        viewedSlider.trigger('next.owl.carousel');
    });
}
}


});
</script>


<script>
function change() {
let results = Array.from(document.querySelectorAll('.result > div'));
// Hide all results
results.forEach(function(result) {
    result.style.display = 'none';
});
// Filter results to only those that meet ALL requirements:
Array.from(document.querySelectorAll('.filter input[rel]:checked'), function(input) {
    const attrib = input.getAttribute('rel');
    results = results.filter(function(result) {
    return result.classList.contains(attrib);
    });
});
// Show those filtered results:
results.forEach(function(result) {
    result.style.display = 'block';
});
}
change();
</script>