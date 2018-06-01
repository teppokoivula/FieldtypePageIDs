# ProcessWire Page IDs Fieldtype

Field that stores Page IDs as simple, numeric values. Long story short: this
Fieldtype was built as a workaround since Page Reference fields can't handle
self-references due to ProcessWire's built-in circular reference prevention.

Fieldtype Page IDs is intended to be loosely compatible with Page References
in order to make conversions between the two feasible, but on the other hand
it is very much limited feature wise: advanced selectors are not supported,
page values can't be directly accessed, only a couple of inputfields are
currently supported, and so on.

## Getting started

Note: this module requires ProcessWire >= 3.0.

Clone or download the module's directory to /site/modules/, go to Admin >
Modules, hit "Check for new modules", and install Fieldtype Page IDs.

Since this is a fieldtype module, the next step would be creating a field
and choosing Page IDs as the fieldtype. In field configuration you should
input a selector string to populate the values, and choose the inputfield
from a list of supported inputfield types (default is AsmSelect).

## License

This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation; either version 2 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program; if not, write to the Free Software Foundation, Inc., 51 Franklin
Street, Fifth Floor, Boston, MA 02110-1301, USA.

(See included LICENSE file for full license text.)