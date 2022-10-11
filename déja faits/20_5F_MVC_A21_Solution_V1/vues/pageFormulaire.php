<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="utf-8" />
    <title>Administration du site</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
</head>

<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 align="center">Ajouter un produit</h1>
            <nav></nav>
        </div>
        <div class="panel-body">
            <form id="signupForm" method="post" class="form-horizontal" action="?action=ajouterProduit">

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="code">Code:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="code" name="code" placeholder="code" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="description">Description :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="description" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="marque">Marque :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="marque" name="marque" placeholder="marque"
                            required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="photo">Photo : </label>
                    <div class="col-sm-5">
                        <input type="file" name="photo" class="form-control" id="photo" title="La photo est obligatoire"
                            required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="code">Prix:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="prix" name="prix" placeholder="prix" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="quantite">Quantite :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="quantite" name="quantite" placeholder="quantite"
                            required />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-4">
                        <input type="submit" class="btn btn-primary btn-lg" value="Enregistrer" id="submit" />
                        <!-- Pour desactiver le bouton utilisez disabled="disabled" comme ceci:
										<input type="submit"  class="btn btn-primary btn-lg" 
										value="Inscription"  id="submit" disabled="disabled" />  -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>