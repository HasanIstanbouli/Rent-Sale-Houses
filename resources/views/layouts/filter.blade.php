
<div class="container col-2" id="filter" style="border: solid #843534 2px;display: block;">
    <form method="post" action="{{url('houses')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="order">Order</label>
            <select class="form-control" name="order" id="order">
                <option>newest 2 oldest</option>
                <option>oldest 2 newest</option>
            </select>
        </div>
        <div class="form-group">
            <label for="City">City</label>
            <select class="form-control" name="city" id="City">
                <option>Lattakia</option>
                <option>Tartous</option>
                <option>Aleppo</option>
                <option>Damascus</option>
            </select>
        </div>
        <div class="form-group">
            <h6>House Status</h6>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status">Rent
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status">Sale
            </label>
        </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status">Any
                </label>
            </div>
        </div>
        <input type="submit" class="btn btn-danger" value="Go">
    </form>


</div>