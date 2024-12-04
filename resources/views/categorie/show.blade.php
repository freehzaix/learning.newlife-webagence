<x-zback>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Modifier la catégorie n°{{ $categorie->id }}
    </h2>

    <div class="row">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="col">
            <form action="{{ route('categorie.update') }}" method="POST">
                @csrf
                <div class="row gy-20">
                    <input type="text" name="id" value="{{ $categorie->id }}" style="display: none;">

                    <div class="col">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="courseTitle" class="h5 mb-8 fw-semibold font-heading">Ajouter une catégorie</label>
                                <div class="position-relative">
                                    <input type="text" name="libelle"
                                        class="text-counter placeholder-13 form-control py-11 pe-76" maxlength="100"
                                        id="courseTitle" placeholder="Libellé de la catégorie" value="{{ $categorie->libelle }}">
                                    <div class="text-gray-400 position-absolute inset-inline-end-0 top-50 translate-middle-y me-16">
                                        <span id="current">18</span>
                                        <span id="maximum">/ 100</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="flex-align py-20 gap-8">
                                <a href="{{ route('categorie.index') }}" class="btn btn-outline-main rounded-pill py-9">Retour</a>
                                <button type="submit" class="btn btn-main rounded-pill py-9">Enregistrer les modifications</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
        <div class="col">

        </div>
    </div>

</x-zback>
