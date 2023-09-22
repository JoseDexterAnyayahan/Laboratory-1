<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 30vh;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <form action="/create" method="post">
        <div class="row g-3 align-items-center">
            <input type="hidden" name="id" class="form-control" value="<?= $record['id'] ?? '' ?>">
            <div class="col-md-3">
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?= $record['StudName'] ?? '' ?>">
            </div>
            <div class="col-md-2">
                <select name="gender" class="form-select">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Prefer not to say">Prefer not to say</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="text" name="course" class="form-control" placeholder="Course" value="<?= $record['StudCourse'] ?? '' ?>">
            </div>
            <div class="col-md-2">
                <input type="text" name="section" class="form-control" placeholder="Section" value="<?= $record['StudSection'] ?? '' ?>">
            </div>
            <div class="col-md-2">
                <input type="number" name="year" class="form-control" placeholder="Year" value="<?= $record['StudYear'] ?? '' ?>">
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>

    <div class="mt-4">
        <?php foreach ($student as $stud) { ?>
            <ul class="list-unstyled">
                <li>ID: <?= $stud['id'] ?></li>
                <li>Name: <?= $stud['StudName'] ?></li>
                <li>Gender: <?= $stud['StudGender'] ?></li>
                <li>Course: <?= $stud['StudCourse'] ?></li>
                <li>Section: <?= $stud['StudSection'] ?></li>
                <li>Year: <?= $stud['StudYear'] ?></li>
                <li><a href="/delete/<?= $stud['id'] ?>" class="btn btn-danger">Delete</a></li>
                <li><a href="/edit/<?= $stud['id'] ?>" class="btn btn-primary">Edit</a></li>
            </ul>
            <hr>
        <?php } ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
