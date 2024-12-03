<x-zback>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Catégories
    </h2>

    <div class="row">

        <div class="col">
            <form action="#">
                <div class="row gy-20">

                    <div class="col">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="courseTitle" class="h5 mb-8 fw-semibold font-heading">Ajouter une catégorie</label>
                                <div class="position-relative">
                                    <input type="text" name="libelle"
                                        class="text-counter placeholder-13 form-control py-11 pe-76" maxlength="100"
                                        id="courseTitle" placeholder="Libellé de la catégorie">
                                    <div
                                        class="text-gray-400 position-absolute inset-inline-end-0 top-50 translate-middle-y me-16">
                                        <span id="current">18</span>
                                        <span id="maximum">/ 100</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="flex-align py-20 gap-8">
                                <button type="reset" class="btn btn-outline-main rounded-pill py-9">Annuler</button>
                                <button type="submit" class="btn btn-main rounded-pill py-9">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
        <div class="col">

        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="col">
                <table id="studentTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="h6 text-gray-300">ID</th>
                            <th class="h6 text-gray-300">Libelle</th>
                            <th class="h6 text-gray-300">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Test</td>
                            <td>
                                <a href="#" class="btn btn-info">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-zback>
