<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <section>
        <div class="container">
            <br><br>
            <h3>Form Send Whatsapp</h3>
            <br><br>

            <div class="row">
                <div class="col-6">
                    <form action="send.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="email">Message</label>
                            <textarea class="form-control" name="message" rows="3"></textarea>
                        </div>
                        <input type="hidden" name="noWa" value="6281380747386">

                        <button type="submit" name="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>