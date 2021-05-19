import React, { useEffect, useState  } from 'react';

import customerServices from "../../services/Customer"

function Form(){

  const [ first_name, setFirstName ] = useState(null);
  const [ last_name, setLastName ] = useState(null);
  const [ email, setEmail ] = useState(null);
  const [ phone_number, setPhoneNumber ] = useState(null);
  const [ birth_date, setBirthDate ] = useState(null);

 

  const saveCustomer = async () => {

    const data = {
      first_name, last_name, email, phone_number, birth_date
    }
    const res = await customerServices.save(data);

    if (res.success) {
      alert(res.message)
    }
    else {
      alert(res.message)
    }
  }

  return(
    <div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName">Fisrt Name </label>
          <input type="text" class="form-control" placeholder="Name"
            onChange={(event)=>setFirstName(event.target.value)} />
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="last_name">Last Name </label>
          <input type="text" class="form-control" placeholder="Name"
            onChange={(event)=>setLastName(event.target.value)} />
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="you@example.com"
            onChange={(event)=>setEmail(event.target.value)} />
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="phone_number">Phone Number </label>
          <input type="number" class="form-control" placeholder="999999999"
            onChange={(event)=>setPhoneNumber(event.target.value)} />
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="birth_date">Birth Date</label>
          <input type="text" class="form-control" placeholder="01/02/1991"
            onChange={(event)=>setBirthDate(event.target.value)} />
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <button class="btn btn-primary btn-block" type="submit"
          onClick={()=>saveCustomer()}>Save 2</button>
        </div>
      </div>
    </div>
  )
}

export default Form;
