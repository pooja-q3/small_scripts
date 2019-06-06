<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head> 
<script>$(document).ready(function () {
        $('table').find('tr:gt(0)').hide();
        ;
        $('.heading').addClass('hCollapsed');


        $(".heading").click(function () {
            $(this).parent().siblings().toggle();
            if ($(this).hasClass('hCollapsed')) {
                $(this).removeClass('hCollapsed').addClass('hExpanded');
            } else {
                $(this).removeClass('hExpanded').addClass('hCollapsed');
            }

        });
    });
</script>
<style>
    .hCollapsed::before {
        content: "+ ";
    }

    .hExpanded::before {
        content: "- ";
    }

    #heading {
        cursor: pointer;
    }
</style>
<body>

    <?php
    $array = ['Pooja', 'Swati', 'Geet'];
    foreach ($array as $key => $arr) {
        echo "	
<table>
  <tr>
    <td class=\"heading\" colspan=\"2\"><b>" . $key . "</b></td>
  </tr>
  <tr>
    <td>" . $arr . "</td>
  </tr>
</table>
";
    }
    ?>

</body>