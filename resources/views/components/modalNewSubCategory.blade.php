<div class="modal fade" id="modalNewSubCategory" role="dialog" aria-labelledby="myModalSubCategory" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content">
            <div class="col-md-12" id="message">
                <div style="text-align: center; font-size: 30px;">
                    <b>Inserisci la nuova Sotto Categoria</b>
                </div>
                <br>
                <div class="form-group" id="nomeSottoCateogria">
                    <label for="for_name">Nome Categoria</label>
                    <input type="text" class="form-control" id="for_name" tabindex="-1" name="for_name" required placeholder="Chitarra Elettrica" />
                </div>
                <div class="form-group has-feedback" id="descrzioneBreveSottoCategoria">
                    <label for="for_descrizionebreve"></label>Descrizione </label>
                    <textarea class="form-control" id="descrizione" name="descrizione" placeholder="Digita la tua descrizione" rows="5" required placeholder="Descrivi la sotto categoria" ></textarea>
                </div>
                <div class="form-group has-feedback" id="selectCategoriaForSub">
                    <label for="prezzo">Selezione Categoria</label><br>
                    <select  class="custom-select mdb-select md-form" name="categoria" id="select_categoria">
                        @foreach( $listaCategorie as $categoria )
                            <option value="{{$categoria->id_categoria}}">{{$categoria->nome_categoria}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Salva la Sotto Categoria <i class="fa fa-chevron-circle-right"></i></button>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Chiudi</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/.Content-->


