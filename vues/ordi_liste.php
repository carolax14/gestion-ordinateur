<?php require_once 'header.php'; ?>
<?php include '../includes/class_ordi.php'; ?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Ordinateurs</h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Acceuil</a></li>
        <li class="breadcrumb-item active">Ordinateurs - Liste</li>
    </ul>
</div>
<section class="tables">
    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Liste des Ordinateurs</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="../includes/process/process_ordi.php" method="POST">
                                <?php
                                $ordi = new Ordinateur();
                                if ($ordi->getOrdi()); ?>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Libelle</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($ordi->getOrdi() as $row) { ?>
                                            <tr>
                                                <td><?= $row['ordi_id']; ?></td>
                                                <td class="text-capitalize"><?= $row['ordi_libelle']; ?></td>
                                                <td>
                                                    <a href="modal_ordi.php?Modifier=<?= $row['ordi_id']; ?>">
                                                        <i name="Modifier" class="fas fa-edit btn-edit"></i>
                                                    </a>
                                                    <a href="../includes/process/process_ordi.php?Supprimer=<?= $row['ordi_id']; ?>
                                            " onclick="return confirm('Voulez-vous supprimer cet ordinateur ?');">
                                                        <i name="Supprimer" class="fas fa-trash-alt btn-supp"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php require_once 'footer.php'; ?>