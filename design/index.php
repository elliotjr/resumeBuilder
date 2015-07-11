<?php
  session_start();
?>

<!doctype html>
<html>

<head>
  <link rel="stylesheet" href="./main.css">
  <title>Resume Builder</title>
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>

<body>
  <div id="wrapper">
    <div id="header">
            <!--            <h1>Resume Builder</h1>-->
        <img src="./img/logo.png" alt="Resume Builder Logo">
    </div>

    <div id="content">
      <div class="pagePreview">

        <div id="cssPreview">
          <div class="page">

          </div>
        </div>
      </div>

      <div class="tools">
        <form id="aim" method="POST" action="pdf.php">
          <div id="accordion-resizer" class="ui-widget-content">
            <div id="accordion">
              <h3 id="personalDetailsTab">Personal Details</h3>
              <div>
                <div class="inputPair">
                  <p>Name</p>
                  <input id="name" type="text" name="name" placeholder="First name | Last name" />
                </div>

                <div class="inputPair">
                  <p>Age</p>
                  <input id="name" type="text" name="age" placeholder="24" />
                </div>

                <div class="inputPair">
                  <p>Email</p>
                  <input id="email" type="text" name="email" placeholder="example@email.com" />
                </div>

                <div class="inputPair">
                  <p>Address</p>
                  <input id="address" type="text" name="address" placeholder="Cardboard box" />
                </div>
              </div>


              <h3 id="aimTab">Next Step</h3>
              <div>
                <p>Write a personal statement or aim.</p>
                <textarea name="aim"></textarea>
              </div>

              <h3 id="educationTab" class="hidden">Next Step</h3>
              <div>
                <div class="educationPod">
                  <h2>High School</h2>
                  <div class="inputPair">
                    <p>High School</p>
                    <input class="schoolName" type="text" name="schoolName" placeholder="Hogwarts" />
                  </div>

                  <div class="inputPair">
                    <p>Years</p>
                    <input class="year" type="text" name="startYear" maxlength="4">
                    <p>-</p>
                    <input class="year" type="text" name="endYear" maxlength="4">
                  </div>
                </div>

                <div class="educationPod">
                  <h2>University</h2>
                  <div class="inputPair">
                    <p>University</p>
                    <input class="schoolName" type="text" name="uniName" placeholder="Hogwarts University" />
                  </div>

                  <div class="inputPair">
                    <p>Years</p>
                    <input class="year" type="text" name="startYearU" maxlength="4" />
                    <p>-</p>
                    <input class="year" type="text" name="endYearU" maxlength="4" />
                  </div>
                </div>
              </div>

              <h3 id="experienceTab" class="hidden">Next Step</h3>
              <div>
                <div class="inputPair">
                  <p>Company</p>
                    <input id="company" type="text" name="company" placeholder="Maccas brah">
                </div>

                <div class="inputPair">
                  <p>Years</p>
                    <input class="year" type="text" name="startYearC" maxlength="4" />
                    <p>-</p>
                    <input class="year" type="text" name="endYearC" maxlength="4" />
                </div>
              </div>
            </div>

            <div>
              <button id="generateButton" type="submit" class="hidden">
                <p>Generate PDF</p>
              </button>
            </div>

          </div>
        </form>
      </div>
    </div>

  <script>
    $(function() {
      $("#accordion").accordion({
        heightStyle: "fill"
      });
    });

    $(function() {
      $("#accordion-resizer").resizable({
        minHeight: 140,
        minWidth: 200,
        resize: function() {
          $("#accordion").accordion("refresh");
          }
      });
    });
    $(function() {
      $("#aimTab").click(function() {
        $(this).text("Aim");
      $("#educationTab").removeClass("hidden");
      })
    });
    $(function() {
      $("#educationTab").click(function() {
        $(this).text("Education");
        $("#experienceTab").removeClass("hidden");
      })
    });
    $(function() {
      $("#experienceTab").click(function() {
        $(this).text("Experience");
        $("#generateButton").removeClass("hidden");
      })
    });
  </script>
</body>

</html>
