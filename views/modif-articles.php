<?php include __DIR__ . '/parties/header.php'; ?>

<h1>Modifier un article</h1>

<form method="post" action="index.php?route=modif-articles&id=<?= $article->id ?>">
    <div class="form-group row">
        <label for="nom" class="col-sm-12 col-form-label">Titre de l'article</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre de l'article" value="<?= $article->titre ?>" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="image" class="col-sm-12 col-form-label">Image</label>
        <div class="col-sm-12">
            <input type="url" class="form-control" name="image" id="image" placeholder="Image" value="<?= $article->image ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="prix" class="col-sm-12 col-form-label">Auteur</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="auteur" id="auteur" placeholder="Auteur" value="<?= $article->auteur ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="stock" class="col-sm-12 col-form-label">Text</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="contenu" id="contenu" placeholder="Text" value="<?= $article->contenu ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">modifier</button>
        </div>
    </div>
</form>

<?php include __DIR__ . '/parties/footer.php';
