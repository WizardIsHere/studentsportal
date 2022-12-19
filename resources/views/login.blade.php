<h4>
    <?php echo $title; ?>
</h4>
@foreach($students as $students):
    <h3>
        <a href="/students/{{$students['id']}}">{{$students['id']}}</a>
    </h3>
    <p>{{$students['name'];}}</p>
@endforeach;