<div class="table-responsive">
    <table class="table-striped text-center">
        <thead>
            <tr>
                <th class="text-danger  ">Name</th>
                <th>Points</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            {foreach $dados as $value}
                <tr>
                    <td>{$value.firstname} {$value.lastname}</td>
                        {{if $value.pontos > 0}}
                            <td class="text-success">{$value.pontos}</td>
                        {{else}}
                            <td class="text-warning">{$value.pontos}</td>
                        {{/if}}
                    <td>{$value.data}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>