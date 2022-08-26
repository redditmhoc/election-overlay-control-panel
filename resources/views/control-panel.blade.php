<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h3>Overlay control panel</h3>
        <hr>
        <ol class="list-group">
            @foreach ($groupings as $grouping)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="fw-bold">{{ $grouping->name }}</div>
                    <form action="{{ route('update-grouping', $grouping) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="">Seats</label>
                                <input type="text" class="form-control" value="{{ $grouping->seats }}" name="seats">
                            </div>
                            <div class="col">
                                <label for="">Votes</label>
                                <input type="text" class="form-control" value="{{ $grouping->votes }}" name="votes">
                            </div>
                            <div class="col">
                                <label for="">Share</label>
                                <input type="text" class="form-control" value="{{ $grouping->vote_share }}" name="vote_share">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            </div>
                        </div>
                    </form>
                </li>
            @endforeach
        </ol>
        <hr>
        <h5>Ticker lines</h5>
        <form action="{{ route('update-ticker-lines') }}" method="post">
            @csrf
            <input type="text" class="form-control w-full" name="lines" value="{{ $lines }}">
            <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </form>
        <hr>
        <a href="{{ route('toggle-bars') }}" class="btn-btn-primary">Toggle bars</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>
