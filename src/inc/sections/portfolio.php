<section id="portfolio">
    
    <div>
        <img src="<?= IMAGES; ?>/skills/github.svg" class="w_h_icon icono" alt="github" title="github">
        <span><?= get_translation('portfolio') ?></span>
    </div>    
    
    <ul>
        <li>
            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="w_h_icon_small icon">
                <path d="M2 2.5A2.5 2.5 0 0 1 4.5 0h8.75a.75.75 0 0 1 .75.75v12.5a.75.75 0 0 1-.75.75h-2.5a.75.75 0 0 1 0-1.5h1.75v-2h-8a1 1 0 0 0-.714 1.7.75.75 0 1 1-1.072 1.05A2.495 2.495 0 0 1 2 11.5Zm10.5-1h-8a1 1 0 0 0-1 1v6.708A2.486 2.486 0 0 1 4.5 9h8ZM5 12.25a.25.25 0 0 1 .25-.25h3.5a.25.25 0 0 1 .25.25v3.25a.25.25 0 0 1-.4.2l-1.45-1.087a.249.249 0 0 0-.3 0L5.4 15.7a.25.25 0 0 1-.4-.2Z"></path>
            </svg>
            <span> pefiguer </span>
        </li>
    </ul>   

    <div class="table">
        <table>
            <tr>
                <th><?= get_translation('portfolio') ?></th>
                <th><?= get_translation('table_url') ?></th>
                <th><?= get_translation('skills') ?></th>
            </tr>
            <?php foreach ($portfolio as $project) { ?>
            <tr>
                <td><?= $project['title'] ?></td>
                <td><a target="_blank" style="z-index: 1000;" href="<?= $project['url'] ?>"> <?= $project['url'] ?> </a></td>
                <td><?= implode(', ', $project['technologies']) ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    
</section>