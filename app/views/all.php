<main>
        <section class="main_banner">
            <img src="/../../public/images/content/<?= $last["image"] ?>" alt="">
            <div class="wrapper">
                <h1><?= $last["title"] ?></h1>
                <p><?= $last["announce"] ?></p>
            </div>
        </section>

        <section class="news-grid">
            <h2>Новости</h2>
            <div class="wrapper">
                <?php foreach ($data as $item) : ?>
                    <div class="news-grid_card">
                        <div class="news-grid_card-date date"><?= date("d.m.Y", strtotime($item["date"])) ?></div>
                        <div class="news-grid_card-content">
                            <div class="news-grid_card-title"><?= $item["title"] ?></div>
                            <div class="news-grid_card-announce"><?= $item["announce"] ?></div>
                        </div>
                        <a href="/news/<?= $item['id'] ?>" class="news-grid_card-btn btn">
                            <div>Подробнее</div>
                            <img src="/../../public/images/arrow.svg" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="news-grid_switches">
                <?php if ($page > 1): ?>
                    <a href="/news?page=<?= $page - 1 ?>">
                        <button class="news-grid_switch-prev">
                            <img src="/../../public/images/arrow small.svg" alt="">
                        </button>
                    </a>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $count; $i++): 
                    if (($page == $i) && ($i != 1) && ($i != $count)): ?>
                        <a href="/news?page=<?= $i - 1 ?>">
                            <button class="news-grid_switch"><?= $i - 1 ?></button>
                        </a>
                        <a href="/news?page=<?= $i ?>" class="active">
                            <button class="news-grid_switch" disabled style="cursor: default;"><?= $i ?></button>
                        </a>
                        <a href="/news?page=<?= $i + 1 ?>">
                            <button class="news-grid_switch"><?= $i + 1 ?></button>
                        </a>
                    <?php elseif (($page == $i) && ($i == 1)): ?>
                        <a href="/news?page=<?= $i ?>" class="active">
                            <button class="news-grid_switch" disabled style="cursor: default;"><?= $i ?></button>
                        </a>
                        <a href="/news?page=<?= $i + 1 ?>">
                            <button class="news-grid_switch"><?= $i + 1 ?></button>
                        </a>
                        <a href="/news?page=<?= $i + 2 ?>">
                            <button class="news-grid_switch"><?= $i + 2 ?></button>
                        </a>
                    <?php elseif (($page == $i) && ($i == $count)): ?>
                        <a href="/news?page=<?= $i - 2 ?>">
                            <button class="news-grid_switch"><?= $i - 2 ?></button>
                        </a>
                        <a href="/news?page=<?= $i - 1?>">
                            <button class="news-grid_switch"><?= $i - 1 ?></button>  
                        </a>
                        <a href="/news?page=<?= $i ?>" class="active">
                            <button class="news-grid_switch" disabled style="cursor: default;"><?= $i ?></button>
                        </a>
                    <?php endif;
                endfor ?>
                <?php if ($page < $count): ?>
                    <a href="/news?page=<?= $page + 1 ?>">
                        <div class="news-grid_switch-next">
                            <img src="/../../public/images/arrow small.svg" alt="">
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </section>
    </main>