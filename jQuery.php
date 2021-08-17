<!DOCTYPE html>
<html>
<head>
	<title>jquery</title>
	<?php include 'bootstrap.php';?>
	<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
</style>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".p").click(function(){
				$(this).hide();
			});
		});
		$(document).ready(function(){
			$(".hide_btn").click(function(){
				$(".p").hide(1000);
			});
		});
		$(document).ready(function(){
			$(".show_btn").click(function(){
				$(".p").show().css("color","green");
			});
		});
		// $(document).ready(function(){
		// 	$(".toggle_btn").click(function(){
		// 		$(".p").toggle();
		// 	});
		// });
		$(document).ready(function(){
			$(".hide_list_element").click(function(){
				$("ul li:first").hide();
			});
		});
		$(document).ready(function(){
			$(".hide_list_child").click(function(){
				$("ul li:first-child").hide();
			});
		});
		$(document).ready(function(){
			$(".href").click(function(){
				$("[href]").hide();
			});
		});
		$(document).ready(function(){
			$("tr:even").css("background-color", "yellow")
		})
		//mouse leave
		$(document).ready(function(){
		  $(".p2").on({
		    mouseenter: function(){
		      $(this).css("background-color", "lightgray");
		    },  
		    mouseleave: function(){
		      $(this).css("background-color", "lightblue");
		    }, 
		    click: function(){
		      $(this).css("background-color", "yellow");
		    }  
		  });
		});
		$(document).ready(function(){
			$(".p1").hover(function(){
				alert("when you enter");
			},
			function(){
				alert("when you exit");
			});
		});
		// focus and blur
		$(document).ready(function(){
			$("input").focus(function(){
				$(this).css("background-color","yellow");
			});
			$("input").blur(function(){
				$(this).css("background-color","green");
			});
		});
		// fadeIn , fadeout, fadetoggle

		$(document).ready(function(){
			$(".fadeOut_btn").click(function(){
				$("#paragraph1").fadeOut();
				$("#paragraph2").fadeOut("slow");
				$("#paragraph3").fadeOut(3000);
			});
		});
		$(document).ready(function(){
			$(".fadeIn_btn").click(function(){
				$("#paragraph1").fadeIn();
				$("#paragraph2").fadeIn("slow");
				$("#paragraph3").fadeIn(3000);
			});
		});
		$(document).ready(function(){
			$(".fadeToggle_btn").click(function(){
				$("#paragraph1").fadeToggle();
				$("#paragraph2").fadeToggle("slow");
				$("#paragraph3").fadeToggle(3000);
			});
		});
		$(document).ready(function(){
			$(".fadeTo_btn").click(function(){
				$("#paragraph1").fadeTo("slow", 0.15);
				$("#paragraph2").fadeTo("slow", 0.4);
				$("#paragraph3").fadeTo("slow", 0.7);
			});
		});

		// sliding

		$(document).ready(function(){
			$("#flip").click(function(){
				$("#panel").slideToggle(2000);
			});
			$(".stop").click(function(){
				$("#panel").stop();
			});
		});

		// animation....

		$(document).ready(function(){
			$(".animate").click(function(){
				var div=$(".div");
				div.animate({width:'50%',opacity: '0.4'},"slow");
				div.animate({fontSize: '5em'},"slow");
				div.animate({height:'300px',opacity: '0.4'},"slow");
				div.animate({fontSize: '2em'},"slow");
				div.animate({width:'200px',opacity: '0.4'},"slow");
				div.animate({height:'100px',opacity: '0.8'},"slow");
			});
		});
		// get content
		$(document).ready(function(){
			$(".text").click(function(){
				alert("text=" + $(".get").text());
			});
			$(".html").click(function(){
				alert("html=" + $(".get").html());
			});
			$(".href").click(function(){
				alert($("#anc").attr("href"));
			});
			$(".value").click(function(){
    			alert("Value: " + $(".test").val());
  });
		});

		$(document).ready(function(){
			$(".stext").click(function(){
			$(".textparagraph").text("this is new text paragraph");
			});
			$(".shtml").click(function(){
			$(".htmlparagraph").html("this is new <b>html</b> paragraph");
			});
			$(".sval").click(function(){
			$("#test3").val("this is new text paragraph");
			});
		});
		$(document).ready(function(){
			$("#btn1").click(function(){
				$("#test1").text(function(i,origtext){
					return "Old text: " + origtext + " New text: Hello world! (index: " + i + ")"; 
				});
			});
			$("#btn2").click(function(){
				$("#test2").html(function(i,origtext){
					return "Old text: " + origtext + " New text: Hello world! (index: " + i + ")"; 
				});
			});
		});

		
	</script>
	<p class="p">my jquery function</p>
	<p class="p1">this is second paragraph</p>
	<button class="hide_btn">hide</button>
	<button class="show_btn">show</button>
	<button class="toggle_btn">Toggle between hiding and showing the paragraphs</button>

	<p>List 1</p>
	<ul>
		<li>ID</li>
		<li>Name</li>
		<li>roll number</li>
	</ul>
	<p>List 2</p>
	<ul>
		<li>ID</li>
		<li>Name</li>
		<li>roll number</li>
	</ul>
	<button class="hide_list_element">hide List element</button>
	<button class="hide_list_child">hide List Child</button>
	<br>
	<a href="#">Google.com</a><br>
	<a href="#">facebook.com</a><br>
	<!-- $("a[target='_blank']").hide(); -->
	<!-- $("a[target!='_blank']").hide(); -->
	<button class="href">hide h-reference</button>
	<table border="1">
  <tr>
    <th>Company</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Berglunds snabbköp</td>
    <td>Sweden</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Austria</td>
  </tr>
</table>

<input type="text" name="name"><br>
<input type="text" name="password">
<p class="p2">this is second paragraph</p>

<button class="fadeIn_btn">Fade In</button>
<button class="fadeOut_btn">Fade Out</button>
<button class="fadeToggle_btn">Fade Toggle</button>
<button class="fadeTo_btn">Fade To</button>
<p id="paragraph1">paragraph 1</p>
<p id="paragraph2">paragraph 2</p>
<p id="paragraph3">paragraph 3</p>

<button class="btn btn-primary stop">Stop</button>
<div id="flip">Click to slide down panel</div>
<div id="panel">Hello world!</div>

<button class="btn btn-primary animate">animation</button>
<div class="div" style="background:#98bf21;height:100px;width:200px;position:absolute;">Mehtab</div>

<h1>jQuery get content</h1>
<a href="https://www.w3schools.com" id="anc"><p class="get">get <b>content</b> in text and html form</p></a>	
<button class="href">Show href Value</button>
<button class="text">show text</button>
<button class="html">show html</button>
<input type="text" value="mehtab" class="test">
<button class="value">show value</button>
<h3>jquery set</h3>
<p class="textparagraph">this is my jquery text paragraph.</p>
<p class="htmlparagraph">this is<b> my </b>jquery html paragraph.</p>
<input type="text" id="test3" value="Mickey Mouse"></p>
<button class="stext">set text</button>
<button class="shtml">set html</button>
<button class="sval">set values</button>
<br>
<p id="test1">This is a <b>bold</b> paragraph.</p>
<p id="test2">This is another <b>bold</b> paragraph.</p>

<button id="btn1">Show Old/New Text</button>
<button id="btn2">Show Old/New HTML</button>
</body>
</html>