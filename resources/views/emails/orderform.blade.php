<h2>Nouvelle demande de devis</h2>
<ul>
    <li><strong>Nom :</strong> {{ $data['name'] ?? 'N/A' }}</li>
    <li><strong>Société :</strong> {{ $data['société'] ?? 'N/A' }}</li>
    <li><strong>Activité :</strong> {{ $data['activité'] ?? 'N/A' }}</li>
    <li><strong>Téléphone :</strong> {{ $data['phone'] ?? 'N/A' }}</li>
    <li><strong>Email :</strong> {{ $data['email'] ?? 'N/A' }}</li>
    <li><strong>Pays :</strong> {{ $data['country'] ?? 'N/A' }}</li>
    <li><strong>Catégorie :</strong> {{ $data['prod_cat'] ?? 'N/A' }}</li>
    <li><strong>Modèle :</strong> {{ $data['prod_mod'] ?? 'N/A' }}</li>
    <li><strong>Message :</strong> {{ $data['message'] ?? 'N/A' }}</li>
</ul>
