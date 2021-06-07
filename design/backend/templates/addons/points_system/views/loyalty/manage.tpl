<div class="table-responsive">
    <table class="table-striped text-center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Points</th>
            </tr>
        </thead>
        <tbody>
            {foreach $dados as $value}
                <tr>
                    <td><a href="admin.php?dispatch=loyalty.update&id_user={$value.id_user}">{$value.firstname} {$value.lastname}</a></td>
                    <td>{$value.pontos_ganhos}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>