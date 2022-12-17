<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    
    <title>Admin Dashboard</title>

</head>
<body style="color: white; background-color: #ff3333">
    
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong> Taurus Bike List</strong> 
                <button class="btn btn-primary" type="submit" value="Logout" href="landingpage.php" hr> </h1>
                
        </div>

        <div class="main row justify-content-center">
            <form action="adminlogin.php" id="bike-form" class="row justify-content-center mb-4" method="POST">

                <div class="col-8  col-md-8 mb-3">
                    <label for="bikenumber"> Bike Number </label>
                    <input class="form-control" id="bikenumber" type="text" placeholder="Enter Bike Number">
                </div>

                <div class="col-8 col-md-8 mb-3">
                    <label for="bikename"> Bike Name </label>
                    <input class="form-control" id="bikename" type="text" placeholder="Enter Bike Name">
                </div>

                <div class="col-8 col-md-8 mb-3">
                    <label for="bikeprice"> Bike Price </label>
                    <input class="form-control" id="bikeprice" type="text" placeholder="Enter Bike Price">
                </div>

                <div class="col-8 col-md-8 mb-3">
                    <label for="quantity"> Quantity </label>
                    <input class="form-control" id="quantity" type="text" placeholder="Enter Quantity">
                </div>

                <div class="col-8 mt-3">
                    <input class="btn btn-success add-btn" type="submit" value="Submit">
                </div>                

            </form>

            <div class="col-8  col-md-8 mt-5">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>Bike Number</th>
                            <th>Bike Name</th>
                            <th>Bike Price</th>
                            <th>Bike Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="bike-list">
                        <tr>
                            <td>1</td>
                            <td>2023 Toseek Metal Mini MTB #20 </td>
                            <td>10500</td>
                            <td>5</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit"> Edit </a>
                                <a href="#" class="btn btn-danger btn-sm delete"> Delete </a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Fixie Garuda Tempest 700c</td>
                            <td>11500</td>
                            <td>6</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit"> Edit </a>
                                <a href="#" class="btn btn-danger btn-sm delete"> Delete </a>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>2022/2023 Pinewood Patrol 2.0 #29 Deore(1x10)</td>
                            <td>10500</td>
                            <td>4</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit"> Edit </a>
                                <a href="#" class="btn btn-danger btn-sm delete"> Delete </a>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>2023 Promax PM10 #26 (3x7) - GRAY </td>
                            <td>12500</td>
                            <td>7</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit"> Edit </a>
                                <a href="#" class="btn btn-danger btn-sm delete"> Delete </a>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Ragusa Megan 27.5 & 29 metroshift(1x10)</td>
                            <td>10000</td>
                            <td>8</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit"> Edit </a>
                                <a href="#" class="btn btn-danger btn-sm delete"> Delete </a>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Toseek R Type Aero 700c Sensah(2x9) - RED </td>
                            <td>13500</td>
                            <td>9</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit"> Edit </a>
                                <a href="#" class="btn btn-danger btn-sm delete"> Delete </a>
                            </td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>Toseek R Type Aero 700c Sensah(2x9) - BLUE</td>
                            <td>13500</td>
                            <td>5</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit"> Edit </a>
                                <a href="#" class="btn btn-danger btn-sm delete"> Delete </a>
                            </td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>Toseek X-Force 2.0 29 Sensah(1x10)</td>
                            <td>10500</td>
                            <td>2</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit"> Edit </a>
                                <a href="#" class="btn btn-danger btn-sm delete"> Delete </a>
                            </td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>22023 Promax PM10 #26 (3x7) - BLUE WHITE</td>
                            <td>10500</td>
                            <td>6</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit"> Edit </a>
                                <a href="#" class="btn btn-danger btn-sm delete"> Delete </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>