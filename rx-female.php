
<?php include("header.php"); ?>

<?php include("navbar.php"); ?>
    
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
               <div ng-app="app" ng-controller="mainController">

                  <table class="table table-striped">
                    <thead >
                      <tr >
                        <th>Registering Athlete</th>
                        <th>Team Name</th>
                        <th>Overall Rank</th>
                        <th>Points</th>
                        <th>WOD 1 Time</th>
                        <th>WOD 1 Reps</th>
                        <th>WOD 1 Rank</th>
                        <th>WOD 2 Reps A</th>
                        <th>WOD 2 Reps B</th>
                        <th>WOD 2 Total</th>
                        <th>WOD 2 Rank</th>
                        <th>WOD 3 Time</th>
                        <th>WOD 3 Reps</th>
                        <th>WOD 3 Rank</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="data in rxFemale" ng-class="{highlight : selectedRow === data}" ng-click="setActive(data)">
                        <td >{{data.gsx$registeringathlete.$t}}</td>
                        <td>{{data.gsx$teamname.$t}}</td>
                        <td>{{data.gsx$overallrank.$t}}</td>
                        <td>{{data.gsx$points.$t}}</td>
                        <td>{{data.gsx$wod1time.$t}}</td>
                        <td>{{data.gsx$wod1reps.$t}}</td>
                        <td>{{data.gsx$wod1rank.$t}}</td>
                        <td>{{data.gsx$wod2repsa.$t}}</td>
                        <td>{{data.gsx$wod2repsd.$t}}</td>
                        <td>{{data.gsx$wod2total.$t}}</td>
                        <td>{{data.gsx$wod2rank.$t}}</td>
                        <td>{{data.gsx$wod3time.$t}}</td>
                        <td>{{data.gsx$wod3reps.$t}}</td>
                        <td>{{data.gsx$wod3rank.$t}}</td>
                    </tr>

                    </tbody>
                  </table>
                </div>

                <a href="/">
                <img src="images/TYPE44-DESCHUTES-DEMO-LOGO.jpg" class="img-responsive aligncenter">
                   </a>
                
               
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    
    
   
    
    <?php include("footer.php"); ?>

</body>

</html>
