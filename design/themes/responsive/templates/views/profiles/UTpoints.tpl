<div class="table-responsive" style="width:100%; padding-top:1%;">
    <table class="table-striped text-center" style="width:100%;">
        <thead>
            <tr>
                <th>Name</th>
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
