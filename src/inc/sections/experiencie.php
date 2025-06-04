<section id="experience">

    <span> <?= get_translation('experience') ?> </span>             
    
    <div class="card">    
        <?php foreach ($experiences as $exp) : ?>
            
        <div class="block-card">
            <ul>    
                <li>
                    <ul> 
                        <li>                    
                            <ul>
                                <li><span><?= $exp['company'] ?></span></li>
                                <li><span><?= $exp['position'] ?></span></li>
                            </ul>
                        </li>    
                        <li>                   
                            <ul>
                                <li><span><?= $exp['period'] ?></span></li>
                                <li><span><?= $exp['location'] ?></span></li>         
                                <li><span><?= $exp['type'] ?></span></li>
                                <li><span><?= $exp['status'] ?></span></li>
                            </ul>
                        </li> 
                    </ul>
                </li>
                <li>        
                    <ul>
                        <?php foreach ($exp['achievements'] as $achievement) : ?>
                            <li><span><?= $achievement ?></span></li>
                        <?php endforeach; ?>                 
                    </ul>
                </li>
            </ul>
        </div>    
                        
        <?php endforeach; ?>
                        
    </div>

</section>