//WAIT UNTIL THE DOCUMENT IS READY TO START ANY JS OR JQ



function test(){console.log("importing function worked");}


function mobileNav(){
  mobileNavOpen = false;




  //GESTURE WORK
  //if its mobile size
  if(window.innerWidth <= 750){

    $(document).off().on("swiperight",function(){
      console.log("swipedright");
      if(mobileNavOpen == false){
        $("div.mobileNav").css("display", "block");
        $("div.mobileNav").transition({x: +100}, "fast", function(){mobileNavOpen = true;})

      }else{}
    });
    $(document).on("swipeleft",function(){
      console.log("swipedleft");
      if(mobileNavOpen == false){
      }else{
        $("div.mobileNav").transition({x: -100}, "fast", function(){$("div.mobileNav").css("display", "none");mobileNavOpen = false;})

      }
    });


  }
  $("img.mobileNav").click(function(){
    if(mobileNavOpen == false){
      $("div.mobileNav").css("display", "block");
      $("div.mobileNav").transition({x: +100}, "fast", function(){mobileNavOpen = true;})

    }else{
      $("div.mobileNav").transition({x: -100}, "fast", function(){$("div.mobileNav").css("display", "none");mobileNavOpen = false;})


    }

  })
}
mobileNav();


bodyHeight = $("body").css("height");
$("#bgDiv").css("height", bodyHeight);

//FANCY IMG

function fancyIMG() {
  imgOpen = 0;
  $(".fancyIMG").click(function () {
    if($(".fancyimg").css('transition')=="all 0s ease 0s"){console.log("not animating")}else{console.log("animating")}
    if (imgOpen == 0 ) {
      if($(".fancyimg").css('transition')=="all 0s ease 0s"){
        //$("#fancyIMG").css("margin", "auto");
        windowWidth = $("#container").outerWidth();
        imgWidth = $(this).outerWidth();
        margin = (windowWidth - imgWidth) / 2;

        pos = $(this).position();
        //console.log(pos.left);
        posLeft = pos.left + margin;

        //console.log("imgw: " + imgWidth);
        //console.log("ww: " + windowWidth);
        //console.log("margin: " + margin);
        imgMargin = $(this).css("margin");
        //$("#fancyIMG").css("margin", "initial");
        //console.log(imgMargin);


        $(this).css("display", "block");
        $(this).css("z-index", "65");
        //$(this).transition({ rotate: '45deg' });
        $(this).transition({x: +margin}, "slow", function () {
          $(this).transition({scale: '1.3'}, "slow", function () {
          });
        });


        $("#bgDiv").css("display", "block");
        imgOpen = 1;
      }else{console.log("animating")}


    }else {
      if($(".fancyimg").css('transition')=="all 0s ease 0s"){
        $("#bgDiv").css("display", "none");
        $(this).css("z-index", "55");
        $(this).transition({scale: '1.0'}, "slow", function () {
          $(".fancyIMG").transition({x: 0}, "slow", function () {
          });
        });
        //$("#fancyIMG").transition({scale: '1.0'}, "slow", function(){});
        imgOpen = 0;
      }else{console.log("animating")}

    }
  })

}
fancyIMG();
/*VERSION 1.0*/
/*
notSet = true;
$("#fancyIMG").hover(function(){
$(this).clearQueue();
if(notSet == true){
originalWidth = $(this).width();
originalHeight = $(this).height();
notSet = false;
}

var extraWidth = Math.round(originalWidth+originalWidth*0.25);
var extraHeight = Math.round(originalHeight+originalHeight*0.25);
console.log("Width: " + extraWidth);
console.log("Height: " + extraHeight);
$(this).transition({
height: extraHeight,
width: extraWidth}, "fast")
},function(){
console.log("Width: " + originalWidth);
console.log("Height: " + originalHeight);
$(this).transition({
height: originalHeight,
width: originalWidth}, "fast")
});

*/


//SLIDER
function slider(){
  sliderOpen = false;
  //$(this).data('height', $(this).height());
  //$(".sliderButton").click(slider());
  $(".sliderButton").click(function () {
    if (sliderOpen == false) {
      $(this).find(".slider").css("display", "block");
      $(this).find(".slider").transition({height: $(this).find(".slider").data('height')}, 'slow');
      sliderOpen = true;
    } else {
      $(".slider").transition({height: 0.0}, 'slow', function () {
        $(".slider").css("display", "none");
      });
      $(this).find(".slider").transition({height: 0.0}, 'slow', function () {
        $(this).find(".slider").css("display", "none");
      });
      sliderOpen = false;
    }
  });

  $(".sliderButton").each(function () {

    $(this).find(".slider").data('height', $(this).height() - 26);
    console.log($(this).find(".slider").data('height'));
    $(this).find(".slider").css("display", "none");
    $(this).find(".slider").transition({height: 0 }, 0);
  });
  //SLIDER

}
slider();


//CREATE THE MODAL FUNCTION


function modal() {
  // THE VARIABLE TO CHECK IF THE MODAL IS OPEN
  var modalOpen = 0;

  //HIDES THE MODALBOX WHEN THE FUNCTION IS RAN
  $("#modalBox").hide();
  //-------------------------------------------------- THE CLOSE BUTTON INSIDE THE MODAL --------------------------------------------------------
  $(".innerToggleButton").click(function () {
    if (modalOpen == 0) {

      $("#modalBox").transition({marginTop: '50px', opacity: 1}, "slow", function () {
        $("#modalBox").css("display", "block");
      });
      $("#bgDiv").css("display", "block");
      modalOpen = 1;
    } else {
      $("#modalBox").transition({marginTop: '-50px', opacity: 0}, "slow", function () {
        $("#modalBox").css("display", "none");
        $("#bgDiv").css("display", "none");
      });

      modalOpen = 0;
    }
  });


  //-------------------------------------------------- ESCAPE BUTTON --------------------------------------------------------
  $(document.body).keydown(function (event) {
    if (modalOpen == 1) {
      if (event.which == 27) {
        $("#modalBox").transition({marginTop: '-50px', opacity: 0}, "slow", function () {
          $("#modalBox").css("display", "none");
        });
        $("#bgDiv").css("display", "none");
        modalOpen = 0;
      }


    }

  });


  //-------------------------------------------------- THE BUTTON TO TOGGLE THE MODAL --------------------------------------------------------
  $(".toggleButton").click(function () {
    if (modalOpen == 0) {
      $("#modalBox").css("display", "block");
      $("#modalBox").transition({marginTop: '100px', opacity: 1}, "slow", function () {
      });
      $("#bgDiv").css("display", "block");
      modalOpen = 1;
    } else {
      $("#bgDiv").css("display", "none");
      $("#modalBox").transition({marginTop: '-50px', opacity: 0}, "slow", function () {
        $("#modalBox").css("display", "none");
      });
      modalOpen = 0;
    }
  });


}

//--------------------------------------------------CALLTHEMODALFUNCTIONHERE--------------------------------------------------------! >
//modal();






//CREATE THE MODAL FUNCTION


function roadBlock(x) {
  // THE VARIABLE TO CHECK IF THE MODAL IS OPEN
  var roadBlockOpen = 0;
  var delayTime
  //HIDES THE MODALBOX WHEN THE FUNCTION IS RAN
  //$("#roadBlockBox").show();
  //$("#roadBlockBox").css("opacity","1");
  console.log("Roadblock called");
  //-------------------------------------------------- THE CLOSE BUTTON INSIDE THE MODAL --------------------------------------------------------
  $("document").ready(function () {
    if (roadBlockOpen == 0) {
      $("#bgDiv").css("opacity", "0");
      $("#roadBlockBox").delay(delayTime).animate({marginTop: '100px', opacity: 1}, "slow", function () {
        $("#roadBlockBox").css("display", "block");
      });
      $("#bgDiv").css("display", "block");
      $("#bgDiv").delay(delayTime).animate({ opacity: 1}, "slow");
      roadBlockOpen = 1;
    } else {
      $("#roadBlockBox").transition({marginTop: '-50px', opacity: 0}, "slow", function () {
        $("#roadBlockBox").css("display", "none");
      });
      $("#bgDiv").css("display", "none");
      roadBlockOpen = 0;
    }
  });


  //-------------------------------------------------- ESCAPE BUTTON --------------------------------------------------------
  $(document.body).keydown(function (event) {
    if (roadBlockOpen == 1) {
      if (event.which == 27) {
        $("#roadBlockBox").transition({marginTop: '-50px', opacity: 0}, "slow", function () {
          $("#roadBlockBox").css("display", "none");
        });
        $("#bgDiv").css("display", "none");
        roadBlockOpen = 0;
      }


    }

  });


  $(".roadBlockinnerToggleButton").click(function () {
    if (roadBlockOpen == 0) {

      $("#roadBlockBox").transition({marginTop: '100px', opacity: 1}, "slow", function () {
        $("#roadBlockBox").css("display", "block");
      });
      $("#bgDiv").css("display", "block");
      roadBlockOpen = 1;
    } else {
      $("#roadBlockBox").transition({marginTop: '-50px', opacity: 0}, "slow", function () {
        $("#roadBlockBox").css("display", "none");
        $("#bgDiv").css("display", "none");
      });

      modalOpen = 0;
    }
  });

  $(".roadBlocktoggleButton").click(function () {
    if (roadBlockOpen == 0) {
      $("#roadBlockBox").css("display", "block");
      $("#roadBlockBox").transition({marginTop: '100px', opacity: 1}, "slow", function () {
      });
      $("#bgDiv").css("display", "block");
      roadBlockOpen = 1;
    } else {
      $("#bgDiv").css("display", "none");
      $("#roadBlockBox").transition({marginTop: '-50px', opacity: 0}, "slow", function () {
        $("#roadBlockBox").css("display", "none");
      });
      roadBlockOpen = 0;
    }
  });
}

//--------------------------------------------------CALLTHEroadBlockFUNCTIONHERE--------------------------------------------------------! >



//-------------------------------------------------------viewport Checker---------------------------------------------------------
function viewportAnimation(element){
  $( window ).scroll(function(){
    if($(element).visible()){
      console.log($(element).visible());
      $(element).transition({marginLeft: '0', opacity: 1}, 2000, 'easeOutQuart',function () {
      });
    }
  });
}
