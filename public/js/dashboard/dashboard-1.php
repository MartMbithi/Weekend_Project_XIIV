<script>
  (function($) {
    /* "use strict" */

    var dzChartlist = (function() {
      let draw = Chart.controllers.line.__super__.draw; //draw shadow
      var screenWidth = $(window).width();
      var donutChart = function() {
        var options = {
          series: [<?php echo $cash; ?>, <?php echo $mpesa; ?>, <?php echo $bank; ?>, <?php echo $card; ?>],
          chart: {
            type: "donut",
          },
          legend: {
            show: false,
          },
          plotOptions: {
            pie: {
              startAngle: -86,
              donut: {
                size: "40%",
              },
            },
          },
          stroke: {
            width: "10",
          },
          dataLabels: {
            formatter(val, opts) {
              const name = ["Cash", "Mpesa", "Bank Deposits", "Debit / Credit Cards"];
              return [val.toFixed() + "%"];
            },
            dropShadow: {
              enabled: true,
            },
            style: {
              fontSize: "15px",
              colors: ["#fff"],
            },
          },
          colors: ["#214BB8", "#45ADDA", "#FE634E", "#2bc155"],
          /* responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
				show:false,
              position: 'bottom'
            }
          }
        }] */
        };

        var chart = new ApexCharts(
          document.querySelector("#donutChart"),
          options
        );
        chart.render();
      };

      var donutChart1 = function() {
        $("span.donut").peity("donut", {
          width: "90",
          height: "90",
        });
      };
     
      /* Function ============ */
      return {
        init: function() {},

        load: function() {
          donutChart();
          donutChart1();
          widgetChart1();
          revenueChart();
          chartBar();
        },

        resize: function() {},
      };
    })();

    jQuery(document).ready(function() {});

    jQuery(window).on("load", function() {
      setTimeout(function() {
        dzChartlist.load();
      }, 1000);
    });

    jQuery(window).on("resize", function() {});
  })(jQuery);
</script>