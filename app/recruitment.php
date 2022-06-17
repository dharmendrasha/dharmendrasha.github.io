<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jobs @ dharmendraShah.</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="/cvSubmit" method="post" enctype="multipart/form-data">
        <h1 ondblclick="window.location = '/';">
            <center>jobs @ dharmendraShah.</center>
        </h1>
        <br />
        <div class="row">
            <div class="col">
                <div class="form-group">
                <i class="fa fa-id-badge" aria-hidden="true"></i>
                    <label for="Full_Name">Full Name</label>
                    <input type="text" class="form-control" name="Full_Name" id="Full_Name" aria-describedby="Name" placeholder="Full Name" required>
                    <small id="Name" class="form-text text-muted">Enter your Full Name.</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                <i class="fa fa-phone" aria-hidden="true"></i>
                    <label for="PhoneNum">Phone No.</label>
                    <input type="number" class="form-control" name="PhoneNum" id="PhoneNum" aria-describedby="Phone" placeholder="Phone No" required>
                    <small id="Phone" class="form-text text-muted">Enter Your Phone No.</small>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailad" placeholder="email" required>
                    <small id="emailad" class="form-text text-muted">Enter your email address.</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                <i class="fa fa-code" aria-hidden="true"></i>
                    <label for="feild">Select your Expertise</label>
                    <select required multiple class="form-control" name="feild" id="feild">
                        <option value="Web Development">Web development</option>
                        <option value="Android Development">Android Development</option>
                        <option value="Ios Development">IOS Development</option>
                        <option value="Other Expertise">Other Expertise</option>
                    </select>
                </div>
            </div>
            <div class="w-100"></div>
            <div  class="col">
                <div hidden class="form-group">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <label for="explainYourself">Explain Yourself</label>
                    <textarea class="form-control" name="explainYourself" id="explainYourself" rows="3" ></textarea>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
               <div class="form-group">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
                 <label for="Upload Your CV">Upload Your CV</label>
                 <input required type="file" class="form-control-file" name="cv" id="Upload Your CV" placeholder="Upload CV" aria-describedby="Upload Your CV"  accept="application/pdf">
                 <small id="Upload Your CV" class="form-text text-muted">Upload Your CV</small>
               </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <button type="submit" name="cvSubmit" class="btn btn-primary">Submit</button>
            </div>
            </form>

             <div class="col">
                <button onclick="window.location = '';" name="refresh" class="btn btn-secondary">RESET FEILDS</button>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>