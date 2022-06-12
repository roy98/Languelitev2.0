<x-layout>
    <x-slot:title>
        Community
    </x-slot>
    <div class="bg-light">
        <section class="py-5 mb-5 text-center container-fluid" style="background-color: var(--blue-light)">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Discuss with our community</h1>
                    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                </div>
            </div>
        </section>
        <section class="tchat">
            <div class="container">
                <h3 class="fw-light">Comments</h3>
                <div class="row">
                    <div class="col-sm-5 col-md-6 col-12 pb-4">
                        <div class="comment mt-4 text-justify float-left">
                            <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                            <h4>Jhon Doe</h4> <span>- 20 October, 2018</span> <br>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                        </div>
                        <div class="text-justify comment mt-4 float-right">
                            <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                            <h4>Rob Simpson</h4> <span>- 20 October, 2018</span> <br>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                        </div>
                        <div class="comment mt-4 text-justify">
                            <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                            <h4>Jhon Doe</h4> <span>- 20 October, 2018</span> <br>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                        </div>
                        <div class="comment mt-4 text-justify">
                            <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                            <h4>Rob Simpson</h4> <span>- 20 October, 2018</span> <br>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                        <form id="align-form">
                            <div class="form-group">
                                <h4 class="fw-light">Leave a comment</h4>
                                <label class="fw-light text-muted" for="message">Message</label>
                                <textarea name="msg" id="" msg cols="30" rows="5" class="form-control" style="background-color: #fff;">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label class="fw-light text-muted" for="name">Name</label>
                                <input type="text" name="name" id="fullname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="fw-light text-muted" for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <p class="text-secondary fw-light">If you have an <strong>account</strong> your address will be used to display your profile picture.</p>
                            </div>
                            <div class="form-inline">
                                <input type="checkbox" name="check" id="checkbx" class="mr-1">
                                <label class="text-muted fw-light" for="subscribe">Subscribe me to the newlettter</label>
                            </div>
                            <div class="form-group">
                                <button type="button" id="post" class="btn">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>