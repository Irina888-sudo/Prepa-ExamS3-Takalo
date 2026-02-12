<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of users</title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
    
    <main>
        <h1>Liste des utilisateurs</h1>

        <section class="user-list">
    <?php if(!empty($users)) : ?>
        <?php $longueur = count($users); 
        for($i = 0; $i < $longueur; $i++) { 
            $p = $users[$i]; ?>
            <div class="product-item">
                <h4>
                        <?php echo $p['name']; ?>
                </h4>
            </div>
        <?php } ?>
    <?php else : ?>
        <p>Aucun utilisateur trouvé.</p>
    <?php endif; ?>
</section>

    </main>
  
</body>
</html>