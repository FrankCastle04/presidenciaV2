@csrf
		<div>
			<label for="noempleado">N° de empleado</label>
				<input class="form-control border-0 bg-light shadow-sm"
					type="text"
					name="noempleado"
					value="{{ old('noempleado', $empleadItem->noempleado) }}">
		</div>

		<div>
		<label for="nombre">Nombre</label>
			<input class="form-control border-0 bg-light shadow-sm"
				type="text"
				name="nombre"
				value="{{ old('nombre', $empleadItem->nombre) }}">
		</div>

		<div>
		<label for="apellidos">Apellidos</label>
			<input class="form-control border-0 bg-light shadow-sm"
				type="text"
				name="apellidos"
				value="{{ old('apellidos', $empleadItem->apellidos) }}">
		</div>

		<div>
			<label for="ine">Clave INE</label>
				<input class="form-control border-0 bg-light shadow-sm"
					type="text"
					name="ine"
					value="{{ old('ine', $empleadItem->ine) }}">
		</div>

		<div>
			<label for="curp">CURP</label>
				<input class="form-control border-0 bg-light shadow-sm"
					type="text"
					name="curp"
					value="{{old('curp', $empleadItem->curp) }}">
		</div>

		<div>
		<label for="areaadscr">Area adscrita</label>
			<select class="form-control border-0 bg-light shadow-sm"
				name="areaadscr" >
				{{-- <option>{{ $empleadItem->areaadscr }}</option> --}}
				<option>{{old('areaadscr', $empleadItem->areaadscr) }}</option>
				<option>
					Presidencia
				</option>

				<option>
					Secretaria del Ayuntamiento
				</option>

				<option>
					Control patrimonial
				</option>

				<option>
					Archivo
				</option>

				<option>
					Sindicatura
				</option>

				<option>
					Regidurias
				</option>

				<option>
					Comunicacion Social
				</option>

				<option>
					Direccion de desarrollo económico
				</option>

				<option>
					Coordinacion del instituto para la proteccion de los derechos de la mujer
				</option>

				<option>
					Direccion de ecologia y medio ambiente
				</option>

				<option>
					Catastro
				</option>

				<option>
					Planeacion y transparencia
				</option>

				<option>
					Salud y poblacion
				</option>

				<option>
					Desarrollo social
				</option>

				<option>
					Registro civil
				</option>

				<option>
					Desarrollo urbano
				</option>

				<option>
					Obras publicas
				</option>

				<option>
					Conserjeria Juridica Consultiva
				</option>

				<option>
					Servicios publicos e imagen urbana
				</option>

				<option>
					Seguridad publica
				</option>

				<option>
					Proteccion civil
				</option>

				<option>
					Bombero
				</option>

				<option>
					Rastro
				</option>

				<option>
					Casa de cultura
				</option>

				<option>
					Gobernacion
				</option>

				<option>
					Desarrollo agropecuario y desarrollo rural
				</option>

				<option>
					Tesoreria
				</option>

				<option>
					Biblioteca
				</option>

				<option>
					Administracion
				</option>

				<option>
					Jefatura de recursos humanos
				</option>

				<option>
					Contraloria
				</option>

				<option>
					Oficialia
				</option>

				<option>
					Seguridad pública
				</option>

				<option>
					Asesor
				</option>

				<option>
					Incufide
				</option>

			</select>
		</div>

		<div>
			<label for="cargo">Cargo</label>
				<input class="form-control border-0 bg-light shadow-sm"
					type="text"
					name="cargo"
					value="{{ old('cargo', $empleadItem->cargo) }}">
		</div>

		<div>
		<label for="rfc">RFC</label>
			<input class="form-control border-0 bg-light shadow-sm"
				type="text"
				name="rfc"
				value="{{ old('rfc', $empleadItem->rfc) }}">

		</div>

		<div>
			<h2 class="display-6 mb-0">Datos de direccion del empleado</h2>
			<label for="calle">Calle</label>
				<input class="form-control border-0 bg-light shadow-sm"
					type="text"
					name="calle"
					value="{{ old('calle', $empleadItem->calle) }}">
		</div>

		<div>
			<label for="colonia">Colonia</label>
				<input class="form-control border-0 bg-light shadow-sm"
					type="text"
					name="colonia"
					value="{{ old('colonia', $empleadItem->colonia) }}">
		</div>

		<div>
			<label for="cp">Codigo postal</label>
				<input class="form-control border-0 bg-light shadow-sm"
					type="text"
					name="cp"
					value="{{ old('cp', $empleadItem->cp) }}">
		</div>

		<div>
			<label for="municipio">Municipio</label>
				<input class="form-control border-0 bg-light shadow-sm"
					type="text"
					name="municipio"
					value="{{ old('municipio', $empleadItem->municipio) }}">
		</div>

		<div>
			<label for="noext">N° exterior</label>
				<input class="form-control border-0 bg-light shadow-sm"
					type="text"
					name="noext"
					value="{{ old('noext', $empleadItem->noext) }}">
		</div>

		<div>
			<label for="noint">N° Int</label>
				<input class="form-control border-0 bg-light shadow-sm"
					type="text"
					name="noint"
					value="{{ old('noint', $empleadItem->noint) }}">
		</div>

		<div>
			<h2 class="display-6 mb-0">Datos de contacto del empleado</h2>
			<label for="correo">Correo</label>
				<input class="form-control border-0 bg-light shadow-sm"
					type="email"
					name="correo"
					value="{{ old('correo', $empleadItem->correo)  }}">
		</div>

		<div>
		<label for="nocasa">N° de casa</label>
			<input class="form-control border-0 bg-light shadow-sm"
				type="text"
				name="nocasa"
				value="{{ old('nocasa', $empleadItem->nocasa) }}">
		</div>

		<div>
		<label for="nocelular">N° celular</label>
			<input class="form-control border-0 bg-light shadow-sm"
				type="text"
				name="nocelular"
				value="{{ old('nocelular', $empleadItem->nocelular) }}">
		</div>
		<button class="btn btn-primary btn-lg btn-block">
			{{$btnText}}
		</button>
		<a class="btn btn-link btn-block"
			href="{{ route('empleados.index') }}">
			Cancelar
		</a>