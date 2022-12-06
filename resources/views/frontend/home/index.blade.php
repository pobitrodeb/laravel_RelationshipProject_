<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent Relationship</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <section class="py-5">
        <div class="container">
            <div class="card border-0">
                <div class="card-header text-center"> Eloquent Relationship | One To One Relationship  </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <td> Sl </td>
                            <td> Name </td>
                            <td> Phone</td>
                        </tr>
                        </thead>
                        <tboady>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->phone->name}}</td>
                            </tr>
                            @endforeach
                        </tboady>
                    </table>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header text-center"> Eloquent Relationship | One To Many Relationship  </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead class="bg-primary text-white">
                        <tr>
                            <td> Sl </td>
                            <td> Post title  </td>
                            <td colspan="2"> Post Comments </td>
                        </tr>
                        </thead>
                        <tboady>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$post->title}}</td>
                               @foreach($post->comments as $comment)
                               <td>{{$comment->message}}</td>
                               @endforeach
                            </tr>
                            @endforeach
                        </tboady>
                    </table>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-header text-center"> Eloquent Relationship | Many To Many Relationship  </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead class="bg-primary text-white">
                        <tr>
                            <td> Sl </td>
                            <td> Post title  </td>
                            <td> Category  </td>
                        </tr>
                        </thead>
                        <tboady>
                            @foreach($allposts as $postsInfo)
                                <tr><td>{{$loop->iteration}}</td>
                                    <td>{{$postsInfo->title}}</td>
                                    @foreach($postsInfo->categories as $categories)
                                    <td>{{$categories->name}}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tboady>
                    </table>
                </div>
            </div>


            <div class="card border-0">
                <div class="card-header text-center"> Eloquent Relationship | Has One Through Relationship  </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead class="bg-primary text-white">
                        <tr>
                            <td> Sl </td>
                            <td> Mechanic  </td>
                            <td> Car Model </td>
                            <td> Car Ownner </td>
                          
                        </tr>
                        </thead>
                        <tboady>
                           @foreach($mechanics as $mechanic)
                                <tr>
                                      <td>{{$loop->iteration}}</td>
                                      <td>{{$mechanic->name}}</td>
                                      <td>{{$mechanic->car->model}}</td>
                                    <td>{{$mechanic->carOwner->name}}</td>
                                </tr>
                           @endforeach
                        </tboady>
                    </table>
                </div>
            </div>

        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
