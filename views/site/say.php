<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;

$this->title = 'Sembarang';
?>


<h1>Team</h1>
<div class="conteiner">
    <div class="d-flex justify-content-between flex-col">
            <?php for($i=0; $i<count($jadwals); $i++): ?>
                <div class="col">
                    <div class=" row">
                        <?=  $jadwals[$i]['teamA'] ;?>  
                        <?=  $jadwals[$i]['ScoreA'] ;?>  
                    </div>
                    <div class="col">
                        <?=  $jadwals[$i]['main'] ;?>  
                        <?=  $jadwals[$i]['tanggal'] ;?>  
                    </div>
                    <div class="row">
                        <?=  $jadwals[$i]['teamB'] ;?>  
                        <?=  $jadwals[$i]['ScoreB'] ;?>  
                    </div>
                </div>
                <?php endfor; ?>  
                <?php  $season ;?>  
    </div>
</div>

<?= Html::img('@web/image/logo.png')  ?>

