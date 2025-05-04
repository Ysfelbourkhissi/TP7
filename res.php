<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Données Reçues</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
  <div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Données reçues :</h2>
    <ul class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto">
      <li class="py-2"><strong class="text-gray-700">Nom :</strong> <?php echo htmlspecialchars($_POST['nom']); ?></li>
      <li class="py-2"><strong class="text-gray-700">Prénom :</strong> <?php echo htmlspecialchars($_POST['prenom']); ?></li>
      <li class="py-2"><strong class="text-gray-700">Groupe :</strong> <?php echo htmlspecialchars($_POST['groupe']); ?></li>
      <li class="py-2"><strong class="text-gray-700">DQTE débute :</strong> <?php echo htmlspecialchars($_POST['dqte']); ?></li>
      <li class="py-2"><strong class="text-gray-700">Date de début :</strong> <?php echo htmlspecialchars($_POST['dateDebut']); ?></li>
      <li class="py-2"><strong class="text-gray-700">Date de fin :</strong> <?php echo htmlspecialchars($_POST['dateFin']); ?></li>
      <li class="py-2"><strong class="text-gray-700">Encadrement :</strong> <?php echo htmlspecialchars($_POST['encadrement']); ?></li>
    </ul>
  </div>
</body>
</html>
