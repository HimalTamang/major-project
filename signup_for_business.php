<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Singup Form</title>
        <!-- css boostrap 5 cdn link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- fontawesome link -->
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    </head>

    <body>
        <div class="container mt-5">
            <fieldset>
                <form class="shadow-lg p-5 m-5 bg-white rounded border-1" action="insertion1.php" method="POST" enctype="multipart/form-data">
                    <label for="back"><a href="index.php"><i class="bi bi-house"></i></a></label>
                    <h4 class="text-center mb-4">Registration Form For Your Business</h4>
                    <hr>
                    <div class="mb-3">
                        <label for="owner" class="form-label">Business Onwer:</label>
                        <input type="text" class="form-control" name="owner" placeholder="Enter Business Owner Name">
                    </div>
                    <div class="mb-3">
                        <label for="businessnamelabel" class="form-label">
                            Business Name:
                        </label>
                        <input type="text" class="form-control" name="businessname" placeholder="Hotel/Places" required>
                    </div>
                    <div>
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" name="comment" id="txt" cols="30" rows="5"
                            placeholder="Enter Your Business Description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Upload Images:</label>
                        <input type="file" multiple="multiple" name="photos" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control" name="email" placeholder="example12@gmail.com">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label"> Password:</label>
                        <input type="password" class="form-control" name="pass" placeholder="Password123@@">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"> Confirm Password:</label>
                        <input type="password" class="form-control" name="cpass" placeholder="Password123@@">
                    </div>

                    <div class="mb-3">
                        <label for="forcontact" class="form-label">Contact:</label>
                        <input type="text" class="form-control" name="contact" placeholder="Enter Your Contact Number"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="selectionlabel" class="form-label">Business Type:</label>
                        <select name="selection" id="" class="form-select">
                            <option value="0">Choose</option>
                            <option value="hotel">Hotel & Resort</option>
                            <option value="park">Park</option>
                            <option value="hicking">Hicking Tracks</option>
                            <option value="cycling">Cycling Tracks</option>
                            <option value="coffee">Coffee Shop</option>
                            <option value="view-tower">View Tower</option>                       
                            <option value="guest-house">Guest House</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label"> Address:</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
                    </div>

                    <div class="mb-3">
                        <label for="services" class="form-label">Services/Facilities:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="freewifi" id="flexCheckDefault"
                                name="checkboxvalue[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                Free Wifi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="checkboxvalue[]" type="checkbox" value="hot/cold" id="flexCheckChecked"
                                name="service">
                            <label class="form-check-label" for="flexCheckChecked">
                                Hot/Cold Water/24 hours
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="checkboxvalue[]" type="checkbox" value="music" id="flexCheckChecked"
                                name="service">
                            <label class="form-check-label" for="flexCheckChecked">
                                Music/Instrument
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input"  name="checkboxvalue[]" type="checkbox" value="television" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked" name="service">
                                Television
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="checkboxvalue[]" type="checkbox" value="electricity" id="flexCheckChecked"
                                name="service">
                            <label class="form-check-label" for="flexCheckChecked">
                                Electricity/Solor Panel
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="checkboxvalue[]" type="checkbox" value="sing/double" id="flexCheckChecked"
                                name="service">
                            <label class="form-check-label" for="flexCheckChecked">
                                Signle Bed/Double Bed
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="checkboxvalue[]" type="checkbox" value="peace" id="flexCheckChecked"
                                name="service">
                            <label class="form-check-label" for="flexCheckChecked">
                                Peace Environment
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="checkboxvalue[]" type="checkbox" value="vehicle" id="flexCheckChecked"
                                name="service">
                            <label class="form-check-label" for="flexCheckChecked">
                                Vehicles
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="checkboxvalue[]" type="checkbox" value="fist-aids" id="flexCheckChecked"
                                name="service">
                            <label class="form-check-label" for="flexCheckChecked">
                                First Aid kits
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="menu" class="form-label">Menu & Prize Tags:</label>
                        <input type="file" name="price" class="form-control w-50">
                    </div>

                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Register</button>
                    <div class="mt-5">
                        <p>If you have an account?
                            <a href="signin.php">Sign In here!</a>
                        </p>
                    </div>
                </form>
            </fieldset>
        </div>
    </body>

</html>
