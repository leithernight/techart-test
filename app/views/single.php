<main>
    <nav>
        <a href="/news">Главная</a>
        <span class="divider">/</span>
        <div><?= $data["title"] ?></div>
    </nav>

    <h1>
        <?= $data["title"] ?>
    </h1>

    <section class="new">
        <span class="new_date date"><?= date("d.m.Y", strtotime($data["date"])) ?> </span>
        <div class="new-wrapper">
            <div class="content-container">
                <span class="new-wrapper_announce"><?= $data["announce"] ?></span>
                <div class="new-wrapper_content">
                    <?= $data["content"] ?>
</div>
                <a href="/news" class="new-wrapper_btn btn">
                    <img src="/../../public/images/arrow.svg" alt="">
                    <span>Назад к новостям</span>
                </a>
            </div>
            <img src="/../../public/images/content/<?= $data["image"] ?>" alt="">
        </div>
    </section>
</main>