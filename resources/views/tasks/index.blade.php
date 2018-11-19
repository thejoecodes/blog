<!Doctype html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <h1> These are what I plan to focus on : </h1>

        <ul>
            
            @foreach ($tasks as $task)

                <li>
                	<a href="/tasks/{{ $task->id}}">
						{{ $task->body}}
					</a>
				</li>

            @endforeach

        </ul>

</body>
</html>