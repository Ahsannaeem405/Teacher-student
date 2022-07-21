<div class="modal fade" id="exampleModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12" style="text-align: end;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
            </div>
            <form action="{{ route('student.rate-teacher') }}" method="post">
                @csrf

                <input type="hidden" name="teacher_id" id="teacher_id">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div class="rating">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h1>Rating</h1>
                            <p>You can rate the teacher after watching certain number of his video's its<br>
                                available once per teacher</p>
                            <h3>Over all ratio</h3>
                            <div class="row">
                                <div class="col-md-12" style="display: flex; justify-content: center">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3>Add review</h3>
                            </div>
                            <div>
                                <textarea name="message" id="message"></textarea>
                            </div>
                            <ul class="btn-sec">
                                <li><button type="submit">Rate</button></li>
                                <li><button type="button" class="btn-can" data-dismiss="modal">Cancel</button></li>
                            </ul>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
