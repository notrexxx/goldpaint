
    <h3><?= h($user->nombre) ?></h3>
    <table  class="table table-hover">
        <tr>
            <td><?= __('Nombre') ?></td>
            <td><?= h($user->nombre) ?></td>
        </tr>
        <tr>
            <td><?= __('Username') ?></td>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <td><?= __('Email') ?></td>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <td><?= __('Creado') ?></td>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modificado') ?></td>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
           <td><?= __('Role') ?></td>
           <td> <?= h($user->role); ?></td>
        </tr>
    </table>
    
       


