import React from 'react'
import { Link, NavLink} from 'react-router-dom';


const Navigation = () => {

  const activeMenu = true;

  return (
    <div className="">
      {activeMenu && (<>
        <div className="">
          <Link to="/" onClick={() => {}} className=""></Link>
        </div>
      </>)}
    </div>
  )
}

export default Navigation