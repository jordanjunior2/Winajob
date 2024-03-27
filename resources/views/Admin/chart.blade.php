<html>
    <head>
    <script src="{{asset('partial/assets/js/todolist.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha512-vBmx0N/uQOXznm/Nbkp7h0P1RfLSj0HQrFSzV8m7rOGyj30fYAOKHYvCNez+yM8IrfnW0TCodDEjRqf6fodf/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- End custom js for this page -->
        <title>
            Chart
        </title>

        <body>

        <div style="height: 400px;width: 900px;margin:auto;">
                <canvas id="barChart2"></canvas>
              </div>
        <script>
      $($function(){
        var datas = <?php echo json_encode($datas); ?>;
        var barCanvas = $("#barChart2");
        var barChart = new Chart(barCanvas,{
          type: 'bar',
          data:{
            labels:['Jan','Fev','Mar','Avr','Mai','Juin','Juil','Aout','Sept','Oct','Nov','Dec'],
              datasets:[
                {
                label:  'Candidatures annuelles par mois',
                data:datas,
                backgroundcolor:['red','orange','blue','green','yellow','brown','purple','gold','silver','indigo','pink','violet'],
                }
              ]
          },
          options:{
            scales:{
              yAxes:[{
                  ticks:{
                      beginAtZero:true
                  }
              }]
            }
          }
        });
      })
    </script>
    
        </body>
    </head>
</html>