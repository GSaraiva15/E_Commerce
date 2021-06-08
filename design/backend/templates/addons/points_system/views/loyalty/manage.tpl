<div class="table-responsive" style="width:100%; padding-top:1%;">
    <table class="table-striped text-center" style="width:100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Points</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            {foreach $dados as $value}
                <tr>
                    <td><a href="admin.php?dispatch=loyalty.update&id_user={$value.id_user}">{$value.firstname} {$value.lastname}</a></td>
                    <td>{$value.pontos_ganhos}</td>
                    <td>
                        <a href="admin.php?dispatch=loyalty.pontos&id_user={$value.id_user}">    
                            <button type="button" class="btn btn-outline-primary">Points</button>
                        </a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>