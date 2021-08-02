<div class="col-md-12 col-sm-12 col-lg-12 mb-3">
    <!--					//form starts-->
    <form class="contact-form p-3 mt-3 ">

        <div class="form-title ">
            <h1> Fill Information Below </h1>
        </div>

        <div class="col-md-12">
            <label for="firstname" class="form-label">First Name:</label>
            <input type="text" class="form-control" name="firstname" id="firstname"
                   placeholder="First Name" required>
        </div>

        <div class="col-md-12">
            <label for="lastname" class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="lastname" id="lastname"
                   placeholder="Last Name" required>
        </div>

        <div class=" col-md-12 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1"
                   placeholder="name@example.com" required>
        </div>

        <div class="col-md-12 mb-3">
            <label for="exampleDataList" class="form-label">Category</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" required>
            <datalist id="datalistOptions">
                <option value="Player">
                <option value="Team">
                <option value="Match">
                <option value="Merch">
                <option value="Tickets">
            </datalist>
        </div>

        <div class="col-md-12 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"> message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="col-md-12 mb-3">
            <button class=" jason-button" type="submit">submit</button>
        </div>
    </form>
</div>