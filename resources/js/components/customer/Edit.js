import React, { useEffect, useState } from 'react';

import customerServices from "../../services/Customer"

function Edit(props){

  const [ id, setId ] = useState(null);
  const [ first_name, setFirstName ] = useState(null);
  const [ last_name, setLastName ] = useState(null);
  const [ email, setEmail ] = useState(null);
  const [ phone_number, setPhoneNumber ] = useState(null);
  const [ birth_date, setBirthDate ] = useState(null);

  useEffect(()=>{

    async function fetchDataCustomer(){
      let id = props.match.params.id;
      const res = await customerServices.get(id);

      if (res.success) {
        console.log(res);
        const data = res.data
        setId(data.id)
        setFirstName(data.first_name)
        setLastName(data.last_name)
        setEmail(data.email)
        setPhoneNumber(data.phone_number)
        setBirthDate(data.birth_date)
      }
      else {
        alert(res.message)
      }
    }
    fetchDataCustomer();

  },[])

  const updateCustomer = async () => {

    const data = {
      id, first_name, last_name, email, phone_number, birth_date
    }

    const res = await customerServices.update(data);

    if (res.success) {
      alert(res.message)
    }
    else {
      alert(res.message)
    }

  }


  return (
    <div>
      <h4>Edit </h4>
      <hr/>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" value={first_name} onChange={(event)=>setFirstName(event.target.value)}/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" value={last_name} onChange={(event)=>setLastName(event.target.value)}/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="you@example.com"  value={email} onChange={(event)=>setEmail(event.target.value)}/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="phone_number">Phone Number</label>
          <input type="text" class="form-control" placeholder="you@example.com"  value={phone_number} onChange={(event)=>setPhoneNumber(event.target.value)}/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="birth_date">Birth Date</label>
          <input type="text" class="form-control" placeholder="1234 Main St"  value={birth_date} onChange={(event)=>setBirthDate(event.target.value)}/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <button onClick={()=>updateCustomer()} class="btn btn-primary btn-block" type="submit">Save</button>
        </div>
      </div>
    </div>
  )

}

export default Edit;
