@extends('layouts.applic')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <p class="h3 form-title">Application for admission to the Grade One</p>
            <div class="card mt-3">
                <div class="card-body">
                    <form action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="application_date" class="form-label">Application Date</label>
                                <input type="email" class="form-control form-control-sm" id="application_date" name="application_date" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="school_name" class="form-label">School Name</label>
                                <input type="email" class="form-control form-control-sm" id="school_name" name="school_name" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="academic_year" class="form-label">Academic Year</label>
                                <input type="email" class="form-control form-control-sm" id="academic_year" name="academic_year" readonly>
                            </div>
                        </div>
                    </div>
                    <!-- ########################################3 -->
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Details of the Child
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="child_fullname" class="form-label">Name in full</label>
                                            <input type="text" class="form-control form-control-sm bg-white" id="child_fullname" name="child_fullname">
                                        </div>
                                        <div class="mb-3">
                                            <label for="child_initials" class="form-label">Name with Initials</label>
                                            <input type="text" class="form-control form-control-sm bg-white" id="child_initials" name="child_initials">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="child_sex" class="form-label">Sex</label>
                                            <select class="form-select form-select-sm bg-white" aria-label="Default select example" id="child_sex" name="child_sex">
                                                <option></option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="child_religion" class="form-label">Religion</label>
                                            <input type="text" class="form-control form-control-sm bg-white" id="child_religion" name="child_religion">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="child_medium" class="form-label">Medium of Learning</label>
                                            <select class="form-select form-select-sm bg-white" aria-label="Default select example" id="child_medium" name="child_medium">
                                                <option></option>
                                                <option value="S">Sinhalese</option>
                                                <option value="T">Tamil</option>
                                                <option value="E">English</option>
                                              </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="child_religion" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control form-control-sm bg-white" id="child_religion" name="child_religion">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="child_age" class="form-label">Age on 31st January</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control form-control-sm bg-white" id="child_age_day" name="child_age_day" placeholder="Days">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control form-control-sm bg-white" id="child_age_month" name="child_age_month" placeholder="Months">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control form-control-sm bg-white" id="child_age_year" name="child_age_year" placeholder="Years">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Details of the applicant (Mother/Father/Legal Guardian)
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="container mt-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="inner-heading mb-3">Applicant</h6>
                                            <div class="mb-3">
                                                <label for="applicant_fullname" class="form-label">Name in full</label>
                                                <input type="text" class="form-control form-control-sm bg-white" id="applicant_fullname" name="applicant_fullname">
                                            </div>
                                            <div class="mb-3">
                                                <label for="applicant_initials" class="form-label">Name with Initials</label>
                                                <input type="text" class="form-control form-control-sm bg-white" id="applicant_initials" name="applicant_initials">
                                            </div>
                                            <div class="mb-3">
                                                <label for="applicant_nic" class="form-label">National Identity Card Number</label>
                                                <input type="text" class="form-control form-control-sm bg-white" id="applicant_nic" name="applicant_nic">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="applicant_srilankan" class="form-label">Are You a Sri Lankan?</label>
                                                        <select class="form-select form-select-sm bg-white" aria-label="Default select example" id="applicant_srilankan" name="applicant_srilankan">
                                                            <option></option>
                                                            <option value="Y">Yes</option>
                                                            <option value="N">No</option>
                                                          </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="applicant_religion" class="form-label">Religion</label>
                                                        <input type="text" class="form-control form-control-sm bg-white" id="applicant_religion" name="applicant_religion">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="applicant_address" class="form-label">Permanent Address</label>
                                                <input type="text" class="form-control form-control-sm bg-white mb-1" id="applicant_house_no" name="applicant_house_no" placeholder="House Number">
                                                <input type="text" class="form-control form-control-sm bg-white mb-1" id="applicant_streetname" name="applicant_streetname" placeholder="Street Name">
                                                <input type="text" class="form-control form-control-sm bg-white mb-1" id="applicant_city" name="applicant_city" placeholder="City">
                                            </div>
                                            <div class="mb-3">
                                                <label for="applicant_district" class="form-label">Residential District</label>
                                                <input type="text" class="form-control form-control-sm bg-white" id="applicant_district" name="applicant_district">
                                            </div>
                                            <div class="mb-3">
                                                <label for="applicant_divisional_secretary" class="form-label">Divisional Secretariat relevant to the place of living</label>
                                                <input type="text" class="form-control form-control-sm bg-white" id="applicant_divisional_secretary" name="applicant_divisional_secretary">
                                            </div>
                                            <div class="mb-3">
                                                <label for="applicant_gn" class="form-label">Grama Niladhari Division and number relevant to the place of living</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control form-control-sm bg-white" id="applicant_gn_division" name="applicant_gn_division" placeholder="Grama Niladhari Division">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control form-control-sm bg-white" id="applicant_gn_number" name="applicant_gn_number" placeholder="Grama Niladhari Number">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="inner-heading mb-3">Spouse</h6>
                                            <div class="mb-3">
                                                <label for="spouse_fullname" class="form-label">Name in full</label>
                                                <input type="text" class="form-control form-control-sm bg-white" id="spouse_fullname" name="spouse_fullname">
                                            </div>
                                            <div class="mb-3">
                                                <label for="spouse_initials" class="form-label">Name with Initials</label>
                                                <input type="text" class="form-control form-control-sm bg-white" id="spouse_initials" name="spouse_initials">
                                            </div>
                                            <div class="mb-3">
                                                <label for="spouse_nic" class="form-label">National Identity Card Number</label>
                                                <input type="text" class="form-control form-control-sm bg-white" id="spouse_nic" name="spouse_nic">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="spouse_srilankan" class="form-label">Are You a Sri Lankan?</label>
                                                        <select class="form-select form-select-sm bg-white" aria-label="Default select example" id="spouse_srilankan" name="spouse_srilankan">
                                                            <option></option>
                                                            <option value="Y">Yes</option>
                                                            <option value="N">No</option>
                                                          </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="spouse_religion" class="form-label">Religion</label>
                                                        <input type="text" class="form-control form-control-sm bg-white" id="spouse_religion" name="spouse_religion">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="spous_address" class="form-label">Permanent Address &nbsp;<button type="button" class="btn btn-primary btn-sm btn-tiny">Same as Applicants Address</button></label>
                                                <input type="text" class="form-control form-control-sm bg-white mb-1" id="spous_house_no" name="spous_house_no" placeholder="House Number">
                                                <input type="text" class="form-control form-control-sm bg-white mb-1" id="spous_streetname" name="spous_streetname" placeholder="Street Name">
                                                <input type="text" class="form-control form-control-sm bg-white mb-1" id="spous_city" name="spous_city" placeholder="City">
                                            </div>
                                            <div class="mb-3">
                                                <label for="spouse_district" class="form-label">Residential District</label>
                                                <input type="text" class="form-control form-control-sm bg-white" id="spouse_district" name="spouse_district">
                                            </div>
                                            <div class="mb-3">
                                                <label for="spouse_divisional_secretary" class="form-label">Divisional Secretariat relevant to the place of living</label>
                                                <input type="text" class="form-control form-control-sm bg-white" id="spouse_divisional_secretary" name="spouse_divisional_secretary">
                                            </div>
                                            <div class="mb-3">
                                                <label for="spouse_gn" class="form-label">Grama Niladhari Division and number relevant to the place of living</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control form-control-sm bg-white" id="spouse_gn_division" name="spouse_gn_division" placeholder="Grama Niladhari Division">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control form-control-sm bg-white" id="spouse_gn_number" name="spouse_gn_number" placeholder="Grama Niladhari Number">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              Additional Information
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="inner-heading mb-3">Please complete only the sections relevant to the category applied for in the following sections.</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Children of residents in close proximity to the school.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Children of Past Pupils.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Brothers/ sisters of students studying in the school at present.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Children of persons belonging to the staff in an institution directly involved in school education.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Children of officers transferred on exigency of government service/on annual transfers.
                                    </label>
                                </div>
                            </div>
                                
                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Confirmation
                              </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <div class="mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label text-description" for="flexCheckDefault">
                                            I hereby declare that my child is not attending any government school; government approved private school or any other school at present for his/ her studies. I hereby agree to the conditions from number 01. to number 12, given in the guidelines published in the paper notice. I also declare that the details furnished above are true and correct and I agree further to submit satisfactory evidence relating to my permanent residence and other information indicated here. I am also aware that my application will be rejected if any information furnished by me is found to be false/ forged. If it is revealed after the admission of my child that the information furnished is false/ forged I agree to remove my child from the school and admit him/her to another school in the area nominated by the Department of Education.
                                        </label>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </form>
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection
