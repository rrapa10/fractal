import React, { useEffect, useState } from 'react';

import customerServices from "../../services/Customer"

import { Link } from "react-router-dom";

function List(){

  const [ listCustomer, setListCustomer ] = useState([]);

  useEffect(()=>{

    async function fetchDataCustomer(){
      const res = await customerServices.listCustomer();
      console.log(res.data);
      setListCustomer(res.data)
    }

    fetchDataCustomer();

  },[])

  const onClickDelete = async (i,id) => {

    var yes = confirm("are you sure to delete this item?");
    if (yes === true){

      const res = await customerServices.delete(id)

      if (res.success) {
        alert(res.message) 
        const newList = listCustomer
        newList.splice(i,1)
        setListCustomer(newList);
      }
      else{
        alert(res.message);
      }
    }

  }

  return (
    <section>
      <table class="table" id="customer-table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        {
          listCustomer.map((item,i)=>{
            return(
              <tr>
                <th scope="row">{item.id}</th>
                <td>{item.first_name + " " + item.last_name}</td>
                <td>{item.email}</td>
                <td>{item.phone_number}</td>
                <td>{item.birth_date}</td>
               <td>
                  <Link to={"/customer/edit/"+item.id} class="btn btn-light"> Edit </Link>
                  <a href="#" class="btn btn-danger" onClick={()=>onClickDelete(i,item.id)}> Delete </a>
                </td>
              </tr>
            )
          })
        }
        
        </tbody>
      </table>
    </section>
  )
}

export default List;

