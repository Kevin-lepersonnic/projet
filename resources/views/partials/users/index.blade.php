@foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->last_login?->format('d/m/Y H:i') }}</td>

    </tr>
@endforeach