
@extends('app');
@section('content')


<table class="table table-bordered">
    <th>Email</th>

    <?php foreach ($searches as $search) { ?>

        <tr>
            <td><?php echo $search->email; ?></td>
        </tr>

    <?php }
    ?>
</table>

@endsection
